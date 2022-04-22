<?php

namespace App\Http\Livewire;

use App\Models\Atributo;


/**
 * Class PautaCallVoz
 * @package App\Http\Livewire
 * @version 8
 */
class PautaCallVoz extends PautaBrigida
{

    protected $template = 'pauta-call-voz';
    protected $tipoPuntaje = 'PEC';
    protected $escalas = [
        ['grupo_id' => 1, 'nombre' => 'gestiones', 'opciones' => [180, 181, 182]],
        ['grupo_id' => 8, 'nombre' => 'resoluciones', 'opciones' => [195, 196, 197, 198]],
        ['grupo_id' => 3, 'nombre' => 'pecresponsables', 'opciones' => [166]],
        ['grupo_id' => 4, 'nombre' => 'ruidos', 'opciones' => [168]],
        ['grupo_id' => 5, 'nombre' => 'tiposnegocio', 'opciones' => [171]],
        ['grupo_id' => 9, 'nombre' => 'motivos', 'opciones' => [179]],
    ];


    public function validarExtra()
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
        }        }



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
            $this->deteccion2 = '';
            $this->infocorrecta2 = '';
            $this->gestiona2 = '';
            $this->resolucion2 = '';
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
        if ($this->tipogestion3 != '') {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
            $this->deteccion3 = '';
            $this->infocorrecta3 = '';
            $this->gestiona3 = '';
            $this->resolucion3 = '';
        }
    }
    public function xresolucion1(){
        $this->resolucion4 = $this->resolucion1;
    }

}
