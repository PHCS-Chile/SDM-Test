<?php

namespace App\Http\Livewire;

use App\Models\Atributo;
use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use App\Models\Respuesta;
use Auth;
use Livewire\Component;
use App\Http\Livewire\PautaBase;


/**
 * Class PautaCallVoz
 * @package App\Http\Livewire
 * @version 7
 */
class PautaCallVoz extends PautaBase
{
    public $gestiones, $resoluciones, $ruidos, $tiposnegocio, $pecresponsables, $motivos, $grabacion;
    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
    public $saludo4 = '';
    public $disposicion1 = '';
    public $disposicion2 = '';
    public $disposicion3 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $manejosilencios1 = '';
    public $manejosilencios2 = '';
    public $manejosilencios3 = '';
    public $manejosilencios4 = '';
    public $seguridad1 = '';
    public $seguridad2 = '';
    public $seguridad3 = '';
    public $seguridad4 = '';
    public $seguridad5 = '';
    public $comunicacion1 = '';
    public $comunicacion2 = '';
    public $comunicacion3 = '';
    public $comunicacion4 = '';
    public $educacliente1 = '';
    public $educacliente2 = '';
    public $educacliente3 = '';
    public $educacliente4 = '';
    public $aseguramiento1 = '';
    public $aseguramiento2 = '';
    public $aseguramiento3 = '';
    public $aseguramiento4 = '';
    public $aseguramiento5 = '';
    public $aseguramiento6 = '';
    public $ofrecimientocomercial1 = '';
    public $ofrecimientocomercial2 = '';
    public $ofrecimientocomercial3 = '';
    public $ofrecimientocomercial4 = '';
    public $ofrecimientocomercial5 = '';
    public $ofrecimientocomercial6 = '';
    public $ofrecimientocomercial7 = '';
    public $ofrecimientocomercial8 = '';
    public $ofrecimientocomercial9 = '';
    public $ofrecimientocomercial10 = '';
    public $frasesenganche1 = '';
    public $frasesenganche2 = '';
    public $frasesenganche3 = '';
    public $frasesenganche4 = '';
    public $pecu_deteccion = '';
    public $pecu_gestionincorrecta = '';
    public $pecu_noresuelve = '';
    public $pecu_atenciongrosera = '';
    public $pecu_pocoprofesional = '';
    public $pecu_manipulacliente = '';
    public $pecn_nosondea = '';
    public $pecn_descalificaentel = '';
    public $pecn_beneficiofueraproc = '';
    public $pecn_fraude = '';
    public $pecn_noliberalinea = '';
    public $pecn_factibilidad = '';
    public $pecn_notipificasistema = '';
    public $pecn_otragestion = '';
    public $pecc_niegaescalamiento = '';
    public $pecc_omiteinformacion = '';
    public $pecc_infoconfidencial = '';
    public $pecc_cierrenegocios = '';
    public $pecc_novalidadatos = '';
    public $pecc_despacho = '';
    public $pec_responsable = '';
    public $otro_ruidoenllamada = '';
    public $otro_frasesyscripts = '';
    public $otro_tiponegocio = '';
    public $otro_ofrecimientomultilinea = '';
    public $otro_ofrecimientoequipo = '';
    public $otro_ofrecimientoaccesorio = '';
    public $retroalimentacion = '';
    public $comentario_interno = '';
    public $descripcion_caso = '';
    public $respuesta_ejecutivo = '';
    public $motivo = '';
    public $tipogestion1 = '';
    public $tipogestion2 = '';
    public $tipogestion3 = '';
    public $deteccion1 = '';
    public $deteccion2 = '';
    public $deteccion3 = '';
    public $deteccion4 = '';
    public $infocorrecta1 = '';
    public $infocorrecta2 = '';
    public $infocorrecta3 = '';
    public $infocorrecta4 = '';
    public $gestiona1 = '';
    public $gestiona2 = '';
    public $gestiona3 = '';
    public $gestiona4 = '';
    public $resolucion1 = '';
    public $resolucion2 = '';
    public $resolucion3 = '';
    public $resolucion4 = '';
    public $grabacioncheck = 0;
    public $reclamos1 = 'No Aplica';
    public $reclamos2 = 'No Aplica';
    public $reclamos3 = 'No Aplica';
    public $reclamos4 = 'No Aplica';
    public $reclamos5 = 'No Aplica';
    public $reclamos6 = 'No Aplica';


    // FUNCIONES ESPECÍFICAS DEL BACKEND DE CALL VOZ

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "mount".
     */
    public function inicializar()
    {
        $escalas = [
            ['grupo_id' => 1, 'nombre' => 'gestiones', 'opciones' => [180, 181, 182]],
            ['grupo_id' => 2, 'nombre' => 'resoluciones', 'opciones' => [195, 196, 197, 198]],
            ['grupo_id' => 3, 'nombre' => 'pecresponsables', 'opciones' => [166]],
            ['grupo_id' => 4, 'nombre' => 'ruidos', 'opciones' => [168]],
            ['grupo_id' => 5, 'nombre' => 'tiposnegocio', 'opciones' => [171]],
            ['grupo_id' => 6, 'nombre' => 'motivos', 'opciones' => [179]],
        ];
        $this->cargarEscalas($escalas);


        /* Tipos de atributo al guardar */
        $this->tiposRespuesta = [
            PautaBase::$RESPUESTA_CHECK => [98, 99, 100, 102, 103, 105, 106, 107, 108, 110, 111, 112, 114, 115, 116, 117, 119, 120, 121, 123, 124, 125, 127, 128, 129, 130, 131, 133, 134, 135, 136, 137, 138, 139, 140, 141, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165],
            PautaBase::$RESPUESTA_OPCIONES => [166, 168, 171, 180, 181, 182, 195, 196, 197, 198, 179],
            PautaBase::$RESPUESTA_SI_NO => [169, 172, 173, 174, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 322, 323, 324, 325, 326, 327],
            PautaBase::$RESPUESTA_OTROS => [94, 95, 199, 200],
        ];

        /* Reglas de validación */
        $this->agregarValidaciones([
            'motivo' => 'required',
            'tipogestion1' => 'required',
            'deteccion1' => 'required',
            'infocorrecta1' => 'required',
            'gestiona1' => 'required',
            'resolucion1' => 'required',
            'retroalimentacion' => 'required',
        ]);
        $this->agregarValidaciones([
            'descripcion_caso' => 'required',
            'otro_tiponegocio' => 'required',
            'otro_ruidoenllamada' => 'required',
            'otro_frasesyscripts' => 'required'
        ]);
        $this->grabacion = Grabacion::where('evaluacion_id', $this->evaluacion->id)->first();
        if($this->grabacion){
            $this->grabacioncheck = 1;
        }
    }

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     */
    public function guardar()
    {
        $this->guardarRespuestas([97, 98, 99, 100], 'saludo', 1);
        $this->guardarRespuestas([101, 102, 103], 'disposicion', 1);
        $this->guardarRespuestas([104, 105, 106, 107, 108], 'cordialidad', 1);
        $this->guardarRespuestas([109, 110, 111, 112], 'manejosilencios', 1);
        $this->guardarRespuestas([113, 114, 115, 116, 117], 'seguridad', 1);
        $this->guardarRespuestas([118, 119, 120, 121], 'comunicacion', 1);
        $this->guardarRespuestas([122, 123, 124, 125], 'educacliente', 1, [3, 4]);
        $this->guardarRespuestas([126, 127, 128, 129, 130, 131], 'aseguramiento', 1, [3, 4, 5, 6]);
        $this->guardarRespuestas([132, 133, 134, 135, 136, 137, 138, 139, 140, 141], 'ofrecimientocomercial', 1, [4, 5, 6, 7, 8, 9, 10]);
        $this->guardarRespuestas([142, 143, 144, 145], 'frasesenganche', 1, 4);

        // Errores críticos
        $this->guardarRespuesta(146, ['text' => $this->pecu_deteccion]);
        $this->guardarRespuesta(147, ['text' => $this->pecu_gestionincorrecta]);
        $this->guardarRespuesta(148, ['text' => $this->pecu_noresuelve]);
        $this->guardarRespuesta(149, ['text' => $this->pecu_atenciongrosera]);
        $this->guardarRespuesta(150, ['text' => $this->pecu_pocoprofesional]);
        $this->guardarRespuesta(151, ['text' => $this->pecu_manipulacliente]);
        $this->guardarRespuesta(152, ['text' => $this->pecn_nosondea]);
        $this->guardarRespuesta(153, ['text' => $this->pecn_descalificaentel]);
        $this->guardarRespuesta(154, ['text' => $this->pecn_beneficiofueraproc]);
        $this->guardarRespuesta(155, ['text' => $this->pecn_fraude]);
        $this->guardarRespuesta(156, ['text' => $this->pecn_noliberalinea]);
        $this->guardarRespuesta(157, ['text' => $this->pecn_factibilidad]);
        $this->guardarRespuesta(158, ['text' => $this->pecn_notipificasistema]);
        $this->guardarRespuesta(159, ['text' => $this->pecn_otragestion]);
        $this->guardarRespuesta(160, ['text' => $this->pecc_niegaescalamiento]);
        $this->guardarRespuesta(161, ['text' => $this->pecc_omiteinformacion]);
        $this->guardarRespuesta(162, ['text' => $this->pecc_infoconfidencial]);
        $this->guardarRespuesta(163, ['text' => $this->pecc_cierrenegocios]);
        $this->guardarRespuesta(164, ['text' => $this->pecc_novalidadatos]);
        $this->guardarRespuesta(165, ['text' => $this->pecc_despacho]);
        $this->guardarRespuesta(166, ['text' => $this->pec_responsable]);
        $this->guardarRespuesta(168, ['text' => $this->otro_ruidoenllamada]);
        $this->guardarRespuesta(169, ['text' => $this->otro_frasesyscripts]);
        $this->guardarRespuesta(171, ['text' => $this->otro_tiponegocio]);
        $this->guardarRespuesta(172, ['text' => $this->otro_ofrecimientomultilinea]);
        $this->guardarRespuesta(173, ['text' => $this->otro_ofrecimientoequipo]);
        $this->guardarRespuesta(174, ['text' => $this->otro_ofrecimientoaccesorio]);

        $this->guardarRespuesta(176, ['memo' => $this->retroalimentacion]);
        $this->guardarRespuesta(177, ['memo' => $this->comentario_interno]);
        $this->guardarRespuesta(199, ['memo' => $this->descripcion_caso]);
        $this->guardarRespuesta(200, ['memo' => $this->respuesta_ejecutivo]);
        $this->guardarRespuesta(179, ['text' => $this->motivo]);

        $this->guardarRespuestas([180, 181, 182], 'tipogestion');
        $this->guardarRespuestas([183, 184, 185, 186], 'deteccion');
        $this->guardarRespuestas([187, 188, 189, 190], 'infocorrecta');
        $this->guardarRespuestas([191, 192, 193, 194], 'gestiona');
        $this->guardarRespuestas([195, 196, 197, 198], 'resolucion');
        $this->guardarRespuestas([322, 323, 324, 325, 326, 327], 'reclamos');

    }

    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed|void
     */
    public function configurarCalculoDePuntajes()
    {
        $ponderadores = [
            97 => 8,    // saludo
            101 => 8,   // disposicion
            104 => 15,  // cordialidad
            109 => 10,  // manejosilencios
            113 => 5,   // seguridad
            126 => 4,   // aseguramiento
            122 => 5,   // educacliente
            118 => 15,  // comunicacion
            142 => 15,  // frasesenganche
            132 => 15,  // ofrecimiento comercial OJOOO
        ];
        $this->calcularPENC($ponderadores);
        $atributosCriticos = [
            'pecu' => ['deteccion', 'gestionincorrecta', 'noresuelve', 'atenciongrosera', 'pocoprofesional', 'manipulacliente'],
            'pecn' => ['nosondea', 'descalificaentel', 'beneficiofueraproc', 'fraude', 'noliberalinea', 'factibilidad', 'notipificasistema', 'otragestion'],
            'pecc' => ['niegaescalamiento', 'omiteinformacion', 'infoconfidencial', 'cierrenegocios', 'novalidadatos', 'despacho'],
        ];
        $this->calcularPEC($atributosCriticos);
    }

    /**
     * Gestiona la construccion de la interfaz, así como de sus validaciones.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        if($this->deteccion1 == "No" or $this->deteccion2 == "No" or $this->deteccion3 == "No"){
            $this->pecu_deteccion = "checked";
            $this->xatributospec();
        }else{
            $this->pecu_deteccion = "";
            $this->xatributospec();
        }

        if($this->infocorrecta1 == "No" or $this->infocorrecta2 == "No" or $this->infocorrecta3 == "No"){
            $this->pecu_gestionincorrecta = "checked";
            $this->xatributospec();
        }else{
            $this->pecu_gestionincorrecta = "";
            $this->xatributospec();
        }

        if($this->gestiona1 == "No" or $this->gestiona2 == "No" or $this->gestiona3 == "No"){
            $this->pecu_noresuelve = "checked";
            $this->xatributospec();
        }else{
            $this->pecu_noresuelve = "";
            $this->xatributospec();
        }
        return view('livewire.pauta-call-voz');
    }


    // FUNCIONES PARA LA VALIDACION Y AUTOCOMPLETACIÓN DE CAMPOS SUJETOS A RESTRICCIONES

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xsaludo()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "saludo");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xdisposicion()
    {
        $this->validarCamposNoAplica([], [2, 3], 1, "disposicion");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xcordialidad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "cordialidad");
    }

    public function xreclamos()
    {
        $campos = [
            'reclamos2' => 'required',
            'reclamos3' => 'required',
            'reclamos4' => 'required',
            'reclamos5' => 'required',
            'reclamos6' => 'required',
        ];

        $valorReclamo = '';
        if($this->reclamos1 == 'No Aplica'){
            $this->quitarValidaciones($campos);
            $valorReclamo = 'No Aplica';
        }else{
            $this->agregarValidaciones($campos);
        }

        $this->reclamos2 = $valorReclamo;
        $this->reclamos3 = $valorReclamo;
        $this->reclamos4 = $valorReclamo;
        $this->reclamos5 = $valorReclamo;
        $this->reclamos6 = $valorReclamo;
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xmanejosilencios()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "manejosilencios");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xseguridad()
    {
        $this->validarCamposNoAplica([], [2, 3, 4, 5], 1, "seguridad");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xcomunicacion()
    {
        $this->validarCamposNoAplica([], [2, 3, 4], 1, "comunicacion");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xeducacliente()
    {
        $this->validarCamposNoAplica([3, 4], [2], 1, "educacliente");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xaseguramiento()
    {
        $this->validarCamposNoAplica([3, 4, 5, 6], [2], 1, "aseguramiento");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xofrecimientocomercial()
    {
        $this->validarCamposNoAplica([4, 5, 6, 7, 8, 9, 10], [2, 3], 1, "ofrecimientocomercial");
    }

    /**
     * Gestiona las acciones a realizar al marcar campos en el grupo (familia) "saludo".
     */
    public function xfrasesenganche()
    {
        $this->validarCamposNoAplica([4], [2, 3], 1, "frasesenganche");
    }

    public function xotronegocio()
    {
        $campos = [
            'otro_ofrecimientomultilinea' => 'required',
            'otro_ofrecimientoequipo' => 'required',
            'otro_ofrecimientoaccesorio' => 'required',
        ];
        if ($this->otro_tiponegocio !== "" and $this->otro_tiponegocio != "No aplica") {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

    public function xatributospec()
    {
        $atriobutosPEC = [
            'pecu' => ['deteccion', 'gestionincorrecta', 'noresuelve', 'atenciongrosera', 'pocoprofesional', 'manipulacliente'],
            'pecn' => ['nosondea', 'descalificaentel', 'beneficiofueraproc', 'fraude', 'noliberalinea', 'factibilidad', 'notipificasistema', 'otragestion'],
            'pecc' => ['niegaescalamiento', 'omiteinformacion', 'infoconfidencial', 'cierrenegocios', 'novalidadatos', 'despacho'],
        ];
        $hayMarcado = false;
        foreach ($atriobutosPEC as $tipo => $atributos) {
            foreach ($atributos as $atributo) {
                if ($this->{$tipo . "_" . $atributo} == 'checked') {
                    $hayMarcado = true;
                    break;
                }
            }
            if ($hayMarcado) {
                break;
            }
        }

        // Buscar ocurrencia de errores críticos
        $atributosPEC = Atributo::where('pauta_id', 2)
            ->whereIn('name_categoria', ['PEC NEG', 'PEC UF', 'PEC CUMP'])->get();
        $this->buscarBrechas($atributosPEC);

//
//        $errorescriticos = [146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165];
//        $marca_ec = 0;
//        $respuestascentro = $this->evaluacion->respuestas->where('origen_id',3);
//        foreach ($respuestascentro as $respuesta){
//            foreach($errorescriticos as $atributo_id){
//                if($respuesta->atributo_id == $atributo_id){
//                    if($respuesta->respuesta_int == 0 && $this->{$respuesta->atributo->name_interno} == 'checked'){
//                        $marca_ec = 1;
//                        break;
//                    }
//                }
//            }
//        }
//        $this->marca_ec = $marca_ec;

        if ($hayMarcado) {
            $this->agregarValidaciones(['pec_responsable' => 'required']);
        } else {
            $this->quitarValidaciones(['pec_responsable' => 'required']);
        }
    }

    public function xgestion2()
    {
        $campos = [
            'tipogestion2' => 'required',
            'deteccion2' => 'required',
            'infocorrecta2' => 'required',
            'gestiona2' => 'required',
            'resolucion2' => 'required',
        ];
        if ($this->tipogestion2 != '') {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

    public function xgestion3()
    {
        $campos = [
            'tipogestion3' => 'required',
            'deteccion3' => 'required',
            'infocorrecta3' => 'required',
            'gestiona3' => 'required',
            'resolucion3' => 'required',
        ];
        if ($this->tipogestion2 != '') {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
        }
    }

}
