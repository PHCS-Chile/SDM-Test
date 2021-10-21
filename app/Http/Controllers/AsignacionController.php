<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Estudio;
use App\Models\Periodo;
use App\Models\Evaluacion;
use Illuminate\Http\Request;

/**
 * Class AsignacionController
 * @package App\Http\Controllers
 * @version 3
 */
class AsignacionController extends Controller
{

    public function index($estudioid, $periodoid){
        $estudio = Estudio::find($estudioid);
        $periodo = Periodo::where('periodo_id',$periodoid)->first();
        return view('asignacions.index',[
            'estudio' => $estudio,
            'periodos' => Periodo::all(),
            'periodo' => $periodo,
            'asignacions' => $estudio->asignacions->where('periodo_id', $periodo->id),
        ]);
    }

    public function periodo(Request $request){
            $periodo = Periodo::where('periodo_id', $request->seleccionPeriodo)->first();
            return redirect()->route('asignacions.index', [
                'estudioid' => $request->estudioid,
                'periodoid' => $periodo->periodo_id,
            ]);
    }

    public function listar($asignacionid){
        $asignacion = Asignacion::find($asignacionid);
        $asignacionesPeriodo = Asignacion::where('periodo_id',$asignacion->periodo_id)->where('estudio_id', 1)->get()->sortByDesc('servicio');
        $evaluaciones = Evaluacion::select('rut_ejecutivo','asignacion_id')
            ->where('asignacion_id', $asignacionid)->groupBy('rut_ejecutivo','asignacion_id')->get();
        return view('asignacions.listar',compact(
            'asignacion', 'asignacionesPeriodo', 'evaluaciones'
        ));
    }

    public function ejecutivoevaluaciones($asignacionid, $rutejecutivo){
        $asignacions = Asignacion::where('periodo_id',2)->get()->sortByDesc('servicio');
        $asignacionfinal = Asignacion::where('id',$asignacionid)->first();
        $baseasignacions = Evaluacion::where('asignacion_id',$asignacionid)->where('rut_ejecutivo',$rutejecutivo);
        return view('asignacions.ejecutivoevaluaciones',compact('asignacions', 'baseasignacions', 'asignacionfinal', 'rutejecutivo'));
    }

    public function EjecutivoEvaluacionesCallVoz($asignacionid){
        $asignacions = Asignacion::where('periodo_id',2)->get()->sortByDesc('servicio');
        $asignacionfinal = Asignacion::where('id',$asignacionid)->first();
        $baseasignacions = Evaluacion::where('asignacion_id',$asignacionid);
        return view('asignacions.ejecutivo-evaluaciones-call-voz',compact('asignacions', 'baseasignacions', 'asignacionfinal'));
    }
}
