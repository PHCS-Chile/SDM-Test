<?php

namespace App\Http\Livewire;

use App\Models\Atributo;
use App\Models\Escala;
use App\Models\Estado;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Log;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Auth;

abstract class PautaBrigida extends Component
{
    public $evaluacion_id;
    public $bloqueo;
    public $modales;
    public $grabaciones;
    public $marca_ici ;

    public $evaluacion;
    public $respuestas;
    public $grupos;

    public $rules = [];
    public $rules3 = [];
    public $gestion2 = "";
    public $comentario_calidad = '';

    public $opciones = [];
    public $autoguardado = [];

    protected $errorresCriticos;
    protected $template;
    protected $tipoPuntaje;

    /**
     * Crea una version plana (arreglo) de las respuestas que se sincronizará con la interfaz para el
     * guardado en tiempo real de los cambios. Solo será llamado cuando no se encuentre en memoria este arreglo o
     * el arreglo de Grupos (complemento a als respuestas que incluye detalles como familias y no_aplica).
     *
     * @param $evaluacion
     * @return void
     */
    public function crearArreglosRespuestas($evaluacion)
    {
        $arregloRespuestas = [];
        $arregloGrupos = ['primarios' => [], 'no_aplica' => []];
        foreach ($evaluacion->respuestas as $respuesta) {
            // Respuestas
            if ($respuesta->atributo->tipo_respuesta == 'escala') {
                $arregloRespuestas[$respuesta->atributo_id] = $this->escalaId($respuesta);
            } else {
                $arregloRespuestas[$respuesta->atributo_id] = $respuesta->respuesta_text;
            }
            // Grupos
            if ($respuesta->atributo->id_primario) {
                $arregloGrupos['primarios'][$respuesta->atributo->id_primario][] = $respuesta->atributo->id;
            }
            // No Aplica
            if ($respuesta->atributo->no_aplica === 1) {
                $arregloGrupos['no_aplica'][] = $respuesta->atributo->id;
            }
        }
        $this->respuestas =  $arregloRespuestas;
        $this->grupos =  $arregloGrupos;
    }


    public function escalaId($respuesta)
    {
        if ($respuesta->respuesta_int) {
            foreach ($this->escalas as $escala) {
                if (in_array($respuesta->atributo_id, $escala['opciones'])) {
                    try {
                        return Escala::where('grupo_id', $escala['grupo_id'])
                            ->where('value', $respuesta->respuesta_int)
                            ->first()->id;
                    } catch (\Exception $e) {
                        return null;
                    }

                }
            }
        }
        return null;
    }


    /**
     * Gatilla cambios en grupos al cambiar un campo. Se llama luego de cambiar una respuesta. Esto actualiza los
     * valores en el padre, segun corresponda.
     *
     * @param $atributo
     * @return void
     */
    public function actualizarPadre($atributo)
    {
        $algoMarcado = false;
        $noAplicaMarcado = false;
        // Tiene padre
        if ($atributo->id_primario) {
            $IDsHermanos = $this->grupos['primarios'][$atributo->id_primario];
            foreach ($IDsHermanos as $atributo_id) {
                if ($this->respuestas[$atributo_id] == 'checked') {
                    $algoMarcado = true;
                    if ($atributo->no_aplica) {
                        $noAplicaMarcado = true;
                    }
                }
            }
            if ($noAplicaMarcado) {
                $respuestaTextPadre = "No Aplica";
            } elseif ($algoMarcado) {
                $respuestaTextPadre = "No";
            } else {
                $respuestaTextPadre = "Si";
            }
            $this->respuestas[$atributo->id_primario] = $respuestaTextPadre;
            $this->guardarRespuesta($atributo->id_primario, $respuestaTextPadre);
        }
    }

    public function guardarRespuesta($atributo_id, $respuesta_text)
    {
        $respuesta = Respuesta::where('evaluacion_id', $this->evaluacion_id)
            ->where('origen_id', 1)
            ->firstWhere('atributo_id', $atributo_id);
        $atributo = $respuesta->atributo;

        if ($atributo->tipo_respuesta == 'escala') {
            $escala = Escala::find($respuesta_text);
            $respuesta->respuesta_text = $escala->name;
            $respuesta->respuesta_int = $escala->value;
        } else if ($atributo->tipo_respuesta == 'memo') {
            $respuesta->respuesta_text = "";
            $respuesta->respuesta_int = ($respuesta_text == "" ? 0 : 1);
            $respuesta->respuesta_memo = $respuesta_text;
        } else if ($atributo->tipo_respuesta == 'check') {
            if ($respuesta_text == 'checked') {
                $respuesta->respuesta_int = 1;
                $respuesta->respuesta_text = $respuesta_text;
            } else {
                $respuesta->respuesta_int = 0;
                $respuesta->respuesta_text = '';
            }
        } else if ($atributo->tipo_respuesta == 'SiNo' || $atributo->tipo_respuesta == 'SiNoNoaplica') {
            if ($respuesta_text == "Si") {
                $respuesta->respuesta_int = 1;
            } elseif ($respuesta_text == "No") {
                $respuesta->respuesta_int = 0;
            } elseif ($respuesta_text == "No Aplica") {
                $respuesta->respuesta_int = -1;
            }
            $respuesta->respuesta_text = $respuesta_text;
        }
        $respuesta->save();
    }


    /**
     * Función que se llama siempre luego de cambiar un valor de respuesta en la pauta.
     *
     * @param $respuesta_text
     * @param $atributo_id
     * @return void
     */
    public function updatedRespuestas($respuesta_text, $atributo_id)
    {
        if ($this->evaluacion['estado_id'] == 1) {
            $this->evaluacion['estado_id'] = 20;
            $evaluacion = Evaluacion::find($this->evaluacion_id);
            $evaluacion->cambiarEstado(Estado::EVALUACION_EN_EVALUACION);
        }

        $this->guardarRespuesta($atributo_id, $respuesta_text);
        $this->actualizarPadre(Atributo::find($atributo_id));
    }


    /**
     * Función que se llama siempre luego de cambiar un parámetro de la evaluación en la pauta.
     *
     * @param $valor
     * @param $columna
     * @return void
     */
    public function updatedEvaluacion($valor, $columna)
    {
        $evaluacion = Evaluacion::find($this->evaluacion_id);
        $evaluacion->{$columna} = $valor;
        $evaluacion->save();
    }


    /**
     * Dem Render
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        $evaluacion = Evaluacion::find($this->evaluacion_id);

        // Asegurarse que siempre existan los arreglos para el modelo de Livewire
        if (!$this->respuestas || !$this->grupos) {
            $this->crearArreglosRespuestas($evaluacion);
        }
        if (!$this->evaluacion) {
            $this->evaluacion = $evaluacion->toArray();
        }

        // Validaciones
        $pauta = $evaluacion->getPauta();
        foreach ($pauta->validaciones() as $campo => $regla) {
            //$this->rules[$campo] = $regla;
        }

        return view('livewire.' . $this->template, [
            'escalas' => $pauta->escalas(),
            'grabaciones' => Grabacion::where('evaluacion_id', $this->evaluacion_id)->get(),
            'estados_evaluacion' => Estado::where('tipo', 1)
                ->where('visible', 1)
                ->when($this->evaluacion['estado_id'] == 20, function ($query) {
                $query->orWhere('id', 20);
            })->get()->all(),
        ]);
    }


    /**
     * Agrega validaciones a la pauta.
     *
     * @param array $validaciones
     * @return void
     */
    public function agregarValidaciones(array $validaciones)
    {
        foreach ($validaciones as $campo => $regla) {
            $this->rules[$campo] = $regla;
        }
    }


    /**
     * Quita validaciones de la pauta.
     *
     * @param $campos
     * @return void
     */
    public function quitarValidaciones($campos)
    {
        foreach ($campos as $campo => $regla) {
            unset($this->rules[$campo]);
        }
    }


    /**ROFL
     *
     * @return void
     */
    public function validarExtra()
    {
        dd("?");
    }


    /**
     * Carga una lista de escalas para ser utilizadas en la interfaz.
     *
     * @param $escalas
     * @param $cargarOpciones
     * @return void
     */
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
     * Guarda el formulario verificando estado actualizado de la evaluación y las validaciones.
     */
    public function save()
    {
        if (!empty($this->rules)) {
            //$this->validate($this->rules);
        }
        $this->calcularPuntaje();
        $this->actualizarEstados();
        return redirect(route('evaluacions.indexBrigido', ['evaluacionid'=>$this->evaluacion_id]));

    }

    public function calcularPuntaje()
    {
        $evaluacion = Evaluacion::find($this->evaluacion_id);
        if ($this->tipoPuntaje == 'PEC') {
            $this->calcularPEC($evaluacion->atributos()->where('check_ec', 1));
        }
        $this->evaluacion['penc'] = $this->calcularPENC(
            $evaluacion->atributos()->where('check_primario', 1)->where('name_categoria', 'PENC')
        );

        $evaluacion->penc = $this->evaluacion['penc'];

        $evaluacion->pecc = $this->evaluacion['pecc'];
        $evaluacion->pecu = $this->evaluacion['pecu'];
        $evaluacion->pecn = $this->evaluacion['pecn'];
        $evaluacion->nivel_ec = $this->calcularNivelEC(
            $this->evaluacion['pecc'], $this->evaluacion['pecu'], $this->evaluacion['pecn']
        );

        $evaluacion->save();
    }


    public function calcularNivelEC($pecc, $pecu, $pecn)
    {
        if ($pecu == 0) {
            if ($pecc == 0 || $pecn == 0) {
                return 3;
            }
            return 2;
        } else {
            if ($pecc == 0 && $pecn == 0) {
                return 2;
            }
        }
        return 1;
    }


    /**
     * Guarda cambios en el historial
     *
     * @param $accion
     * @param $detalles
     * @return void
     */
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

    public function calcularPENC($atributosPENC)
    {
        $sumaPonderadoresAplican = 0;
        $sumaPonderadoresMarcados = 0;
        $respuestas = [];
        $ponderadores = [];
        foreach ($atributosPENC as $atributo) {
            $respuesta = $this->respuestas[$atributo->id];
            $respuestas[$atributo->id] = $respuesta;
            $ponderadores[$atributo->id] = $atributo->ponderador;;
            if ($respuesta != 'No Aplica') {
                $sumaPonderadoresAplican += intval($atributo->ponderador);
            }
            if ($respuesta == 'Si') {
                $sumaPonderadoresMarcados += intval($atributo->ponderador);
            }
        }
        return 100 * ($sumaPonderadoresMarcados / $sumaPonderadoresAplican);
    }

    public function calcularPF($ponderadoresPF)
    {
        $sumatotal = 0;
        $suma = 0;

        foreach ($ponderadoresPF as $atributo_id => $ponderador) {
            $respuesta = $this->evaluacion->respuestas->firstWhere('atributo_id', $atributo_id);
            $sumatotal += $ponderador;
            if ($respuesta->respuesta_int < 0) {
                $sumatotal -= $ponderador;
            }
            if ($respuesta->respuesta_int > 0) {
                $suma += $ponderador;
            }
        }
        $this->evaluacion->pf = ($suma / $sumatotal) * 100;
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
                $this->evaluacion->nivel_ec = Evaluacion::EC_LEVE;
            }
        }
        foreach ($atributosCriticosIntermedios as $atributo) {
            if ($this->{$atributo} == "checked") {
                $this->evaluacion->nivel_ec = Evaluacion::EC_INTERMEDIO;
            }
        }
        foreach ($atributosCriticosGraves as $atributo) {
            if ($this->{$atributo} == "checked") {
                $this->evaluacion->nivel_ec = Evaluacion::EC_GRAVE;
            }
        }

        $this->evaluacion->pecu = ($suma / count($atributosCriticos)) * 100;

    }


    /**
     * Calcula el puntaje PEC utilizando un arreglo que describe los atributos criticos.
     *
     * @param $atributosCriticos
     * @return void
     */
    public function calcularPEC($atributosCriticos)
    {
        $this->evaluacion['pecu'] = 100;
        $this->evaluacion['pecn'] = 100;
        $this->evaluacion['pecc'] = 100;
        foreach ($atributosCriticos as $atributo) {
            $tipo = substr($atributo->name_interno, 0, strpos($atributo->name_interno, "_"));
            if ($this->respuestas[$atributo->id] == 'checked') {
                $this->evaluacion[$tipo] = 0;
            }
        }
    }

    public function calcularPECPadres($atributosCriticos)
    {
        $idPadres = array_keys($this->arregloGrupos['primarios']);
        $puntajes = [];
        foreach ($atributosCriticos as $tipo => $atributos) {
            $puntajes[$tipo] = 100;
            foreach ($atributos as $atributo) {
                if ($this->{$tipo . "_" . $atributo} == 'No') {
                    $puntajes[$tipo] = 0;
                    break;
                }
            }
            $this->evaluacion->{$tipo} = $puntajes[$tipo];
        }
        if($this->evaluacion->pecu == 0){
            if($this->evaluacion->pecn == 0 || $this->evaluacion->pecc == 0){
                $this->evaluacion->nivel_ec = Evaluacion::EC_GRAVE;
            }else{
                $this->evaluacion->nivel_ec = Evaluacion::EC_INTERMEDIO;
            }
        }else{
            if($this->evaluacion->pecn == 0 && $this->evaluacion->pecc == 0){
                $this->evaluacion->nivel_ec = Evaluacion::EC_INTERMEDIO;
            }else{
                $this->evaluacion->nivel_ec = Evaluacion::EC_LEVE;
            }
        }
    }


    /**
     * Gestiona posibles cambios de estado en una evaluación al guardar.
     *
     * @return void
     */
    public function actualizarEstados()
    {
        $evaluacion = Evaluacion::find($this->evaluacion_id);

        // Si tiene estado 1 o 20 guarda a quien completa la evaluación
        if ($evaluacion->enBlanco()) {
            $evaluacion->user_completa = Auth::user()->name;
            $evaluacion->fecha_completa = now()->format('d-m-Y H:i:s');
        }
        // Si no tiene usuario vinculado vincula al actual
        if (is_null($evaluacion->user_id )) {
            $evaluacion->user_id = Auth::user()->id;
        }
        // Si es supervisor
        if(Auth::user()->perfil == User::SUPERVISOR){
            $evaluacion->user_supervisor = Auth::user()->name;
            $evaluacion->fecha_supervision = now()->format('d-m-Y H:i:s');
            $evaluacion->cambiarEstado(Estado::EVALUACION_COMPLETA_Y_REVISADA);

            if($evaluacion->nivel_ec > Evaluacion::EC_LEVE && $evaluacion->estado_reporte == Estado::REPORTE_SIN_REPORTE){
                $evaluacion->estado_reporte = Estado::REPORTE_REVISADO_PARA_ENVIAR;
            }
            if($evaluacion->nivel_ec == Evaluacion::EC_LEVE && $evaluacion->estado_reporte == Estado::REPORTE_SIN_REPORTE){
                $evaluacion->estado_reporte = NULL;
            }
        }else{
            if($evaluacion->fecha_ici){
                $evaluacion->cambiarEstado(Estado::EVALUACION_ENVIADADA_A_REVISION);
                if($evaluacion->estado_reporte == NULL){
                    $evaluacion->estado_reporte = Estado::REPORTE_SIN_REPORTE;
                }
            }else{
                $evaluacion->cambiarEstado(Estado::EVALUACION_COMPLETA);
            }
        }
        $evaluacion->save();
    }

}
