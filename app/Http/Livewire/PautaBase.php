<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Log;
use App\Models\Notificacion;
use App\Models\Respuesta;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;


/**
 * Class PautaBase
 *
 * Representa el comportamiento base de las pautas. Por ser abstracta, obliga al desarrollador a definir un
 * metodo "inicializar" y uno "guardar" (que se ejecutarán automáticamente en el "mount" y en el "save"
 * respectivamente, asegurando que se realicen además algunas operaciones de sincronizacion no opcionales.
 *
 * @package App\Http\Livewire
 * @version 10
 */
abstract class PautaBase extends Component
{

    /* Variables de instancia mínimas */
    public $evaluacion;
    public $rules = [];
    public $rules1 = [];
    public $rules2 = [];
    public $rules3 = [];
    public $marca_ici = 0;
    public $gestion2 = "";
    public $marca_ec = 0;
    public $comentario_calidad = '';
    public $tiposRespuesta = [];

    public static $RESPUESTA_SI_NO = 1;
    public static $RESPUESTA_CHECK = 2;
    public static $RESPUESTA_OPCIONES = 3;
    public static $RESPUESTA_OTROS = 4;

    public $opciones = [];


    public function cargarEvaluacion($evaluacionid=null)
    {
        if ($evaluacionid === null) {
            $evaluacionid = $this->evaluacion->id;
        }
        $this->evaluacion = Evaluacion::find($evaluacionid);
    }

    /**
     * Carga info de la base de datos en el controlador y luego llama a la función "inicializar", la que
     * debe ser implementada en las clases que extiendan de esta.
     *
     * @param $evaluacionid    int La id de la evaluación que se cargará
     */
    public function mount(int $evaluacionid){
        /* Obtener info desde la base de datos */
        $this->cargarEvaluacion($evaluacionid);
        if($this->evaluacion->fecha_ici){
            $this->marca_ici = 1;
        }
        $respuestas = $this->evaluacion->respuestas->where('origen_id','1');
        /* Cargar información obtenida en el controlador */
        $this->comentario_calidad = $this->evaluacion->comentario_calidad;
        foreach ($respuestas as $respuesta){
            if ($respuesta->atributo->name_categoria == "Memo") {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_memo;
            } else {
                $this->{$respuesta->atributo->name_interno} = $respuesta->respuesta_text;
            }
        }

        $this->inicializar();
    }


    /**
     * Método abstracto para ejecutar en el contexto del "mount".
     *
     * @return mixed
     */
    public abstract function inicializar();


    public function agregarValidaciones(array $validaciones)
    {
        foreach ($validaciones as $campo => $regla) {
            $this->rules[$campo] = $regla;
        }
    }

    public function quitarValidaciones($campos)
    {
        foreach ($campos as $campo => $regla) {
            unset($this->rules[$campo]);
        }
    }

    public function cargarEscalas($escalas, $cargarOpciones = True)
    {
        foreach ($escalas as $escala) {
            $this->{$escala['nombre']} = Escala::where('grupo_id',$escala['grupo_id'])->orderBy('value', 'ASC')->get();
            if ($cargarOpciones) {
                foreach ($escala['opciones'] as $opcion) {
                    $this->opciones[$opcion] = $this->{$escala['nombre']}->pluck('name')->all();
                }
            }
        }
    }


    /**
     * Efectúa un proceso de evaluación de calidad interna
     * TODO: esto requiere generalizacion
     */
    public function ici()
    {
        $this->validate($this->rules);
        $suma = 0;
        $respuestas = Respuesta::where('evaluacion_id', $this->evaluacion->id)->where('origen_id', Respuesta::PH)->get();
        $atributosNoMemo = 0;
        foreach ($respuestas as $respuesta) {
            if ($respuesta->atributo->name_categoria != "Memo") {
                $atributosNoMemo ++;
                if ($respuesta->respuesta_text != $this->{$respuesta->atributo->name_interno}) {
                    $suma += 100;
                }
            }
            $respuesta->origen_id = Respuesta::ICI;
            $respuesta->save();
        }

        //$atributosNoMemo = count($respuestas->atributo->where('name_categoria', "<>", "Memo")->all());
        $this->evaluacion->ici = $suma / $atributosNoMemo; /* TOTAL ATRIBUTOS NO MEMO? */
        $this->evaluacion->user_ici = Auth::user()->id;
        $this->evaluacion->fecha_ici = now()->format('d-m-Y H:i:s');
        $this->evaluacion->comentario_calidad = $this->comentario_calidad;
        $this->evaluacion->save();
        $this->save();
    }


    /**
     * Método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed
     */
    public abstract function guardar();


    /**
     * Método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed
     */
    public abstract function configurarCalculoDePuntajes();


    /**
     * Determina si hay una casilla marcada en una familia, para los correlativos indicados
     *
     * @param $correlativos array Lista de correlativos a verificar
     * @param $familia string Nombre de la familia de atributos
     * @return bool True si hay algun atributo marcado, False si no
     */
    public function hayCasillaMarcada($correlativos, $familia)
    {
        foreach ($correlativos as $correlativo) {
            if ($this->{$familia . $correlativo} == "checked") {
                return true;
            }
        }
        return false;
    }


    /**
     * Realiza la validación completa de marcado de casillas en el formulario. Se debe indicar los correlativos
     * que sean de tipo "no aplica", los campos "normales" y el campo resumen (padre), así como la familia de
     * atributos. Por ejemplo, si tenemos los atributos: entrada1, entrada2, entrada3, entrada4, entrada5 y entrada6
     * Y definimos que el "entrada1" es el resumen, que "entrada 5" y "entrada6" son camplos "no aplica" (por lo que
     * "entrada2", "entrada3" y "entrada4" son campos normales), el llamado a la función quedaría:
     *      validarCamposNoAplica([5, 6], [2, 3, 4], 1, "entrada");
     *
     * @param $correlativosNoAplica array Lista de correlativos de tipo "No Aplica"
     * @param $correlativosNormales array Lista de correlativos "normales"
     * @param $correlativoPadre int Correlativo del atributo padre (resumen)
     * @param $familia string Nombre de la familia de atributos
     */
    public function validarCamposNoAplica($correlativosNoAplica, $correlativosNormales, $correlativoPadre, $familia)
    {
        if ($this->hayCasillaMarcada($correlativosNoAplica, $familia)) {
            foreach ($correlativosNormales as $correlativo) {
                $this->{$familia . $correlativo} = "";
            }
            $this->{$familia . $correlativoPadre} = "No Aplica";
        } else if ($this->hayCasillaMarcada($correlativosNormales, $familia)) {
            $this->{$familia . $correlativoPadre} = "No";
        } else {
            $this->{$familia . $correlativoPadre} = "Si";
        }
    }


    /**
     * Guarda el formulario verificando estado actualizado de la evaluación y las validaciones.
     */
    public function save()
    {
        if (!empty($this->rules)) {
            $this->validate($this->rules);
        }
        $this->cargarEvaluacion($this->evaluacion->id);
        $this->guardar();
        $this->cargarEvaluacion($this->evaluacion->id);
        $this->configurarCalculoDePuntajes();
        $this->modificarEstados();
        return redirect(route('evaluacions.index', ['evaluacionid' => $this->evaluacion->id]));
    }

    public function guardarEnHistorial($accion, $detalles)
    {
        if ($detalles['antes'] != $detalles['despues']) {
            $log = new Log();
            $log->user_id = Auth::user()->id;
            $log->evaluacion_id = $this->evaluacion->id;
            $log->accion = $accion;
            $log->detalles = $detalles;
            $log->save();
        }
    }

    public function respuestasArreglo()
    {
        $arreglo = [];
        foreach ($this->evaluacion->respuestas->all() as $respuesta) {
            $arreglo[$respuesta->atributo_id] = [
                $respuesta->respuesta_int,
                $respuesta->respuesta_text,
                $respuesta->respuesta_memo,
            ];
        }
        return $arreglo;
    }

    public function buscarBrechas($atributosPEC)
    {
        foreach($atributosPEC as $atributoPEC) {
            if ($this->{$atributoPEC->name_interno} == "checked") {
                $respuestaCentro = Respuesta::where('origen_id',3)
                    ->where('evaluacion_id', $this->evaluacion->id)
                    ->where('atributo_id', $atributoPEC->id)
                    ->orderBy('id', 'DESC')->first();
                if($respuestaCentro) {
                    if ($respuestaCentro->respuesta_int == 0) {
                        $this->marca_ec = 1;
                        return;
                    }
                }
            }
        }
        $this->marca_ec = 0;
    }

    public function calcularPENC($ponderadores)
    {
        $sumatotal = 0;
        $suma = 0;

        foreach ($ponderadores as $atributo_id => $ponderador) {
            $respuesta = $this->evaluacion->respuestas->firstWhere('atributo_id', $atributo_id);
            $sumatotal += $ponderador;
            if ($respuesta->respuesta_int < 0) {
                $sumatotal -= $ponderador;
            }
            if ($respuesta->respuesta_int > 0) {
                $suma += $ponderador;
            }
        }
        $this->evaluacion->penc = ($suma / $sumatotal) * 100;
    }

    public function calcularPECSimple($atributosCriticos, $atributosCriticosLeves, $atributosCriticosIntermedios, $atributosCriticosGraves)
    {
        $suma = 0;
        foreach ($atributosCriticos as $atributo) {
            if ($this->{$atributo} != "checked") {
                $suma++;
            }
        }

        foreach ($atributosCriticosLeves as $atributo) {
            if ($this->{$atributo} == "checked") {
                $this->evaluacion->nivel_ec = 1;
            }
        }
        foreach ($atributosCriticosIntermedios as $atributo) {
            if ($this->{$atributo} == "checked") {
                $this->evaluacion->nivel_ec = 2;
            }
        }
        foreach ($atributosCriticosGraves as $atributo) {
            if ($this->{$atributo} == "checked") {
                $this->evaluacion->nivel_ec = 3;
            }
        }

        $this->evaluacion->pecu = ($suma / count($atributosCriticos)) * 100;

    }

    public function calcularPEC($atributosCriticos)
    {
        $puntajes = [];
        foreach ($atributosCriticos as $tipo => $atributos) {
            $puntajes[$tipo] = 100;
            foreach ($atributos as $atributo) {
                if ($this->{$tipo . "_" . $atributo} == 'checked') {
                    $puntajes[$tipo] = 0;
                    break;
                }
            }
            $this->evaluacion->{$tipo} = $puntajes[$tipo];
        }
        if($this->evaluacion->pecu == 0){
            if($this->evaluacion->pecn == 0 || $this->evaluacion->pecc == 0){
                $this->evaluacion->nivel_ec = 3;
            }else{
                $this->evaluacion->nivel_ec = 2;
            }
        }else{
            if($this->evaluacion->pecn == 0 && $this->evaluacion->pecc == 0){
                $this->evaluacion->nivel_ec = 2;
            }else{
                $this->evaluacion->nivel_ec = 1;
            }
        }
    }

    public function modificarEstados()
    {
        if($this->evaluacion->estado_id == 1){
            $this->evaluacion->user_completa = Auth::user()->name;
            $this->evaluacion->fecha_completa = now()->format('d-m-Y H:i:s');
        }
        if(is_null($this->evaluacion->user_id)){
            $this->evaluacion->user_id = Auth::user()->id;
        }

        if(Auth::user()->perfil == 1){
            $this->evaluacion->user_supervisor = Auth::user()->name;
            $this->evaluacion->fecha_supervision = now()->format('d-m-Y H:i:s');
            Log::log($this->evaluacion->id, Log::ACCION_CAMBIO_ESTADO, [$this->evaluacion->estado_id, 5]);
            $this->evaluacion->estado_id = 5;
            Notificacion::limpiarNotificaciones($this->evaluacion->id);

            if($this->evaluacion->nivel_ec > 1 && $this->evaluacion->estado_reporte == 11){
                $this->evaluacion->estado_reporte = 12;
            }
            if($this->evaluacion->nivel_ec == 1 && $this->evaluacion->estado_reporte == 11){
                $this->evaluacion->estado_reporte = NULL;
            }
        }else{
            if($this->marca_ec == 1){
                Log::log($this->evaluacion->id, Log::ACCION_CAMBIO_ESTADO, [$this->evaluacion->estado_id, 3]);
                $this->evaluacion->estado_id = 3;
                if($this->evaluacion->estado_reporte == NULL){
                    $this->evaluacion->estado_reporte = 11;
                }
            }else{
                Log::log($this->evaluacion->id, Log::ACCION_CAMBIO_ESTADO, [$this->evaluacion->estado_id, 2]);
                $this->evaluacion->estado_id = 2;
            }
        }
        if ($this->evaluacion->estado_id == 3) {
            Notificacion::notificar($this->evaluacion->id);
        }
        $this->evaluacion->comentario_calidad = $this->comentario_calidad;
        $this->evaluacion->save();
    }


    /**
     * Guarda un batch de respuestas que comparten el mismo "nombre de familia". Los atributos en las pautas
     * se tienden a agrupar por temática indexada del 1 al n (donde n es la cantidad de atributos de la familia).
     * Permite además indicar si uno de los atributos es resumen o si uno o más anulan las demás respuestas (no aplica).
     * Por ejemplo, si se desea guardar los atributos con id 1, 5, 30, 42 y 100, teniéndose como resumen el 5 y
     * como "no aplica" el 42 y el 100, para la familia de atributos "atributo" se deberá llamar a la función de la
     * siguiente manera:
     *
     *      guardarRespuestas([1, 5, 30, 42, 100], "atributo", 2, [3, 4]);
     *      // Donde 2, 3 y 4 representan al correlativo de la familia (van desde 1 hasta n)
     *
     * NOTA: El atributo "no aplica" puede recibir un entero en lugar de un arreglo para los casos en los que solo
     *       exista 1 campo "No aplica".
     *
     *
     * @param $idsAtributo  array Lista de atributos del grupo
     * @param $nombreFamilia string Nombre que comparten los atributos del grupo
     * @param $resumen bool|int Posición del atributo "resumen" (de 1 a n)
     * @param $noAplica bool|int|array Posiciones de los atributos "no aplica" (de 1 a n), en un arreglo
     */
    public function guardarRespuestas(array $idsAtributo, string $nombreFamilia, $resumen=false, $noAplica=false)
    {
        /* Se carga en un arreglo auxiliar los atributos que no sean ni "resumen" ni "no aplica" */
        $atributosRegulares = [];
        if (is_integer($noAplica)) {
            $noAplica = [$noAplica];
        }
        for ($i = 0; $i < count($idsAtributo); ++$i) {
            if (($i + 1) !== $resumen) {
                if ($noAplica !== false) {
                    if (!in_array($i + 1, $noAplica)) {
                        $atributosRegulares[$idsAtributo[$i]] = $nombreFamilia . ($i + 1);
                    }
                }else{
                    $atributosRegulares[$idsAtributo[$i]] = $nombreFamilia . ($i + 1);
                }

            }
        }
        /* Se generan los booleanos de verificación para verificar la presencia de chequeados y de "no aplica" */
        $hayChequeados = false;
        $noAplicaMarcado = false;
        if ($noAplica !== false) {
            if (!is_array($noAplica)) {
                $noAplica = [$noAplica];
            }
            foreach ($noAplica as $campo) {
                if ($this->{$nombreFamilia . $campo} == "checked") {
                    $noAplicaMarcado = true;
                    break;
                }
            }
        }

        /* Se guardan los atributos "regulares" (ni "resumen" ni "no aplica") */
        foreach ($atributosRegulares as $idAtributo => $nombreAtributo) {
            if (!$noAplicaMarcado) {
                $this->guardarRespuesta($idAtributo, ['text' => $this->{$nombreAtributo}]);
                if ($this->{$nombreAtributo} == "checked") {
                    $hayChequeados = true;
                }
            } else {
                $this->guardarRespuesta($idAtributo, []);
            }
        }
        /* Se resuelve el guardado del padre y no aplica, dependiendo del caso */
        if ($noAplica !== false) {
            foreach ($noAplica as $campo) {
                $this->guardarRespuesta($idsAtributo[$campo - 1], ['text' => $this->{$nombreFamilia . $campo}]);
            }
        }
        if ($resumen !== false) {

            if ($noAplicaMarcado) {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'No Aplica', 'int' => -1]);
            } elseif ($hayChequeados) {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'No', 'int' => 0]);
            } else {
                $this->guardarRespuesta($idsAtributo[$resumen - 1], ['text' => 'Si', 'int' => 1]);
            }
        }
    }

    /**
     * Guarda una única respuesta del formulario. Se debe indicar un arreglo con los valores a guardar, donde
     * los índices válidos son "text", "int" y "memo" (uno para cada tipo de dato de respuesta).
     *
     * @param $idAtributo int ID del atributo a guardar
     * @param $valores array Valores a guardar
     */
    public function guardarRespuesta(int $idAtributo, array $valores)
    {
        /* Se verifica la existencia del atributo. Si no existe, se crea. */
        $respuestasOrigen1 = $this->evaluacion->respuestas->where('origen_id', Respuesta::PH);
        $respuesta = $respuestasOrigen1->firstWhere('atributo_id', $idAtributo);
        if ($respuesta === null) {
            $respuesta = new Respuesta();
            $respuesta->atributo_id = $idAtributo;
            $respuesta->evaluacion_id = $this->evaluacion->id;
            $respuesta->origen_id = Respuesta::PH;
        }
        /* Se asigna valor al atributo, dependiendo de los índices que hayan sido entregados. */
        if (isset($valores['text']) && $valores['text'] != null) {
            $respuesta->respuesta_text = $valores['text'];
        } else {
            $respuesta->respuesta_text = "";
        }
        if (isset($valores['int'])) {
            $respuesta->respuesta_int = $valores['int'];
        } else {
            foreach ($this->tiposRespuesta as $tipo => $idsAtributo) {
                if(in_array($idAtributo, $idsAtributo)) {
                    $respuesta->respuesta_int = $this->crearRespuestaInt($tipo, !empty($valores['text']) ? $valores['text'] : '' , $idAtributo);
                }
            }
        }
        if (isset($valores['memo'])) {
            $respuesta->respuesta_memo = $valores['memo'];
        }
        $respuesta->save();
    }

    public function crearRespuestaInt($tipo, $respuesta, $idAtributo)
    {
        if ($tipo == PautaBase::$RESPUESTA_CHECK) {
            return $respuesta == "checked" ? 1 : 0;
        } elseif ($tipo == PautaBase::$RESPUESTA_SI_NO) {
            return $respuesta == "Si" ? 1 : 0;
        } elseif ($tipo == PautaBase::$RESPUESTA_OPCIONES) {
            $respuestaInt = 0;
            for ($i = 0; $i < count($this->opciones[$idAtributo]); ++$i) {
                if ($this->opciones[$idAtributo][$i] == $respuesta) {
                    $respuestaInt = $i + 1;
                    break;
                }
            }
            return $respuestaInt;
        } elseif ($tipo == PautaBase::$RESPUESTA_OTROS) {
            return $respuesta != "" ? 1 : 0;
        }
        return NULL;
    }

}
