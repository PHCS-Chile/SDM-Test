<?php

namespace App\Http\Livewire;

use App\Models\Escala;
use App\Models\Evaluacion;
use App\Models\Respuesta;
use Auth;
use Livewire\Component;
use App\Http\Livewire\PautaBase;

/**
 * Class PautaDigital
 * @package App\Http\Livewire
 * @version 7
 */
class PautaDigital extends PautaBase
{
    public $gestiones, $resoluciones;
    public $resultado = '';
    public $saludo1 = '';
    public $saludo2 = '';
    public $saludo3 = '';
    public $saludo4 = '';
    public $saludo5 = '';
    public $saludo6 = '';
    public $frases1 = '';
    public $frases2 = '';
    public $frases3 = '';
    public $frases4 = '';
    public $frases5 = '';
    public $cordialidad1 = '';
    public $cordialidad2 = '';
    public $cordialidad3 = '';
    public $cordialidad4 = '';
    public $cordialidad5 = '';
    public $gestionplantillas1 = '';
    public $gestionplantillas2 = '';
    public $gestionplantillas3 = '';
    public $gestionplantillas4 = '';
    public $gestionplantillas5 = '';
    public $ortografia1 = '';
    public $ortografia2 = '';
    public $ortografia3 = '';
    public $ortografia4 = '';
    public $ortografia5 = '';
    public $ortografia6 = '';
    public $ortografia7 = '';
    public $personalizacion1 = '';
    public $personalizacion2 = '';
    public $personalizacion3 = '';
    public $personalizacion4 = '';
    public $seguridad1 = '';
    public $seguridad2 = '';
    public $seguridad3 = '';
    public $seguridad4 = '';
    public $manejosilencios1 = '';
    public $manejosilencios2 = '';
    public $manejosilencios3 = '';
    public $manejosilencios4 = '';
    public $aseguramiento1 = '';
    public $aseguramiento2 = '';
    public $aseguramiento3 = '';
    public $ofrecimiento1 = '';
    public $ofrecimiento2 = '';
    public $ofrecimiento3 = '';
    public $ofrecimiento4 = '';
    public $ofrecimiento5 = '';
    public $motivo = '';
    public $gestion1 = '';
    public $gestion2 = '';
    public $gestion3 = '';
    public $deteccion1 = '';
    public $deteccion2 = '';
    public $deteccion3 = '';
    public $deteccion4 = '';
    public $infocorrecta1 = '';
    public $infocorrecta2 = '';
    public $infocorrecta3 = '';
    public $infocorrecta4 = '';
    public $procedimiento1 = '';
    public $procedimiento2 = '';
    public $procedimiento3 = '';
    public $procedimiento4 = '';
    public $resolucion1 = '';
    public $resolucion2 = '';
    public $resolucion3 = '';
    public $pecu_deteccion = '';
    public $pecu_infocorrecta = '';
    public $pecu_procedimiento = '';
    public $pecu_pocoprofesional = '';
    public $pecu_manipulacliente = '';
    public $pecu_cierreinteraccion = '';
    public $pecu_provocacierre = '';
    public $pecn_beneficio = '';
    public $pecn_fraude = '';
    public $pecn_nosondea = '';
    public $pecn_tipificacion = '';
    public $pecn_factibilidad = '';
    public $pecn_otragestion = '';
    public $pecc_infoconfidencial = '';
    public $pecc_novalidadatos = '';
    public $pecc_cierre = '';
    public $pecc_infoerronea = '';
    public $asistentevirtual1 = '';
    public $asistentevirtual2 = '';
    public $asistentevirtual3 = '';
    public $gestionesanteriores1 = '';
    public $gestionesanteriores2 = '';
    public $gestionesanteriores3 = '';
    public $usuarios1 = '';
    public $usuarios2 = '';
    public $usuarios3 = '';
    public $comentario_interno = '';
    public $retroalimentacion = '';
    public $paso = '';


    public function inicializar()
    {
        $escalas = [
            ['grupo_id' => 1, 'nombre' => 'gestiones', 'opciones' => []],
            ['grupo_id' => 2, 'nombre' => 'resoluciones', 'opciones' => []],
        ];
        $this->cargarEscalas($escalas, False);

        /* Reglas de validación */
        $this->agregarValidaciones([
            'motivo' => 'required',
            'gestion1' => 'required',
            'deteccion1' => 'required',
            'infocorrecta1' => 'required',
            'procedimiento1' => 'required',
            'resolucion1' => 'required',
            'retroalimentacion' => 'required',
        ]);
    }

    public function xpersonalizacion(){
        if($this->personalizacion3 == "checked"){
            $this->personalizacion1 = "";
            $this->personalizacion2 = "";
            $this->personalizacion4 = "No Aplica";
        }
    }

    public function xaseguramiento(){
        if($this->aseguramiento2 == "checked"){
            $this->aseguramiento1 = "";
            $this->aseguramiento3 = "No Aplica";
        }
    }

    public function xofrecimiento(){
        if($this->ofrecimiento4 == "checked"){
            $this->ofrecimiento1 = "";
            $this->ofrecimiento2 = "";
            $this->ofrecimiento3 = "";
            $this->ofrecimiento5 = "No Aplica";
        }
    }

    public function xgestion2(){

        $campos = [
            'gestion2' => 'required',
            'deteccion2' => 'required',
            'infocorrecta2' => 'required',
            'procedimiento2' => 'required',
            'resolucion2' => 'required',
        ];
        if ($this->gestion2 != '') {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
            $this->deteccion2 = '';
            $this->infocorrecta2 = '';
            $this->procedimiento2 = '';
            $this->resolucion2 = '';
        }    
    }

    public function xgestion3(){

        $campos = [
            'gestion3' => 'required',
            'deteccion3' => 'required',
            'infocorrecta3' => 'required',
            'procedimiento3' => 'required',
            'resolucion3' => 'required',
        ];
        if ($this->gestion3 != '') {
            $this->agregarValidaciones($campos);
        } else {
            $this->quitarValidaciones($campos);
            $this->deteccion3 = '';
            $this->infocorrecta3 = '';
            $this->procedimiento3 = '';
            $this->resolucion3 = '';
        }    
    }



    /*
     * TODO: Esto requiere una manito de gato
     */
    public function guardar(){
        $this->guardarRespuestas([1, 2, 3, 4, 5, 6], 'saludo', 6);
        $this->guardarRespuestas([7, 8, 9, 10, 11], 'frases', 5);
        $this->guardarRespuestas([12, 13, 14, 15, 16], 'cordialidad', 5);
        $this->guardarRespuestas([17, 18, 19, 20, 21], 'gestionplantillas', 5);
        $this->guardarRespuestas([22, 23, 24, 25, 26, 27, 28], 'ortografia', 7);
        $this->guardarRespuestas([29, 30, 31, 32], 'personalizacion', 4, 3);
        $this->guardarRespuestas([33, 34, 35, 178], 'seguridad', 3);
        $this->guardarRespuestas([36, 37, 38, 39], 'manejosilencios', 4);
        $this->guardarRespuestas([40, 41, 42], 'aseguramiento', 3, 2);
        $this->guardarRespuestas([43, 44, 45, 46, 47], 'ofrecimiento', 5, 4);
        $this->guardarRespuesta(48, ['text' => $this->motivo]);
        $this->guardarRespuestas([49, 50, 51], 'gestion');
        $this->guardarRespuestas([52, 53, 54, 55], 'deteccion', 4);
        $this->guardarRespuestas([56, 57, 58, 59], 'infocorrecta', 4);
        $this->guardarRespuestas([60, 61, 62, 63], 'procedimiento', 4);
        $this->guardarRespuestas([64, 65, 66], 'resolucion');

        // ERRORES CRITICOS
        $this->guardarRespuesta(67, ['text' => $this->pecu_deteccion]);
        $this->guardarRespuesta(68, ['text' => $this->pecu_infocorrecta]);
        $this->guardarRespuesta(69, ['text' => $this->pecu_procedimiento]);
        $this->guardarRespuesta(70, ['text' => $this->pecu_pocoprofesional]);
        $this->guardarRespuesta(71, ['text' => $this->pecu_manipulacliente]);
        $this->guardarRespuesta(73, ['text' => $this->pecu_cierreinteraccion]);
        $this->guardarRespuesta(74, ['text' => $this->pecu_provocacierre]);
        $this->guardarRespuesta(75, ['text' => $this->pecn_beneficio]);
        $this->guardarRespuesta(76, ['text' => $this->pecn_fraude]);
        $this->guardarRespuesta(77, ['text' => $this->pecn_nosondea]);
        $this->guardarRespuesta(78, ['text' => $this->pecn_tipificacion]);
        $this->guardarRespuesta(79, ['text' => $this->pecn_factibilidad]);
        $this->guardarRespuesta(80, ['text' => $this->pecn_otragestion]);
        $this->guardarRespuesta(81, ['text' => $this->pecc_infoconfidencial]);
        $this->guardarRespuesta(82, ['text' => $this->pecc_novalidadatos]);
        $this->guardarRespuesta(83, ['text' => $this->pecc_cierre]);
        $this->guardarRespuesta(84, ['text' => $this->pecc_infoerronea]);

        // CARACTERIZACION COMPLEMENTARIA
        $this->guardarRespuestas([85, 86, 87], 'asistentevirtual');
        $this->guardarRespuestas([88, 89, 90], 'gestionesanteriores');
        $this->guardarRespuestas([91, 92, 93], 'usuarios');

        $this->guardarRespuesta(94, ['memo' => $this->retroalimentacion]);
        $this->guardarRespuesta(95, ['memo' => $this->comentario_interno]);
    }


    /**
     * Implementación de método abstracto para ejecutar en el contexto del "save".
     *
     * @return mixed|void
     */
    public function configurarCalculoDePuntajes(){

        $ponderadores = [
            6 => 10,
            11 => 10,
            16 => 10,
            21 => 10,
            28 => 10,
            32 => 10,
            35 => 10,
            39 => 10,
            42 => 10,
            47 => 10,
        ];
        $this->calcularPENC($ponderadores);
         $atributosCriticos = [
            'pecu' => ['deteccion', 'infocorrecta', 'procedimiento', 'pocoprofesional', 'manipulacliente', 'cierreinteraccion', 'provocacierre'],
            'pecn' => ['beneficio', 'fraude', 'nosondea', 'tipificacion', 'factibilidad', 'otragestion'],
            'pecc' => ['infoconfidencial', 'novalidadatos', 'cierre', 'infoerronea'],
        ];
        $this->calcularPEC($atributosCriticos);

    }

    public function render()
    {
        // PEC AUTOMATICO SEGUN ATRIBUTOS DE GESTIONES
        if($this->deteccion1 == "No" or $this->deteccion2 == "No" or $this->deteccion3 == "No"){
            $this->pecu_deteccion = "checked";
        }else{
            $this->pecu_deteccion = "";
        }

        if($this->infocorrecta1 == "No" or $this->infocorrecta2 == "No" or $this->infocorrecta3 == "No"){
            $this->pecu_infocorrecta = "checked";
        }else{
            $this->pecu_infocorrecta = "";
        }

        if($this->procedimiento1 == "No" or $this->procedimiento2 == "No" or $this->procedimiento3 == "No"){
            $this->pecu_procedimiento = "checked";
        }else{
            $this->pecu_procedimiento = "";
        }              

        
        return view('livewire.pauta-digital');
    }
}
