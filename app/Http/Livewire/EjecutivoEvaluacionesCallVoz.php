<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\Evaluacion;
use App\Models\Estado;
use App\Models\Asignacion;


/**
 * Class EjecutivoEvaluacionesCallVoz
 * @package App\Http\Livewire
 *
 * @version 2
 */
class EjecutivoEvaluacionesCallVoz extends Component
{

    public $asignacionid;
    public $filtroEstado;
    public $filtroEstadoGrabacion;
    public $filtroFecha;
    public $filtroConnid;
    public $searchMovil;
    public $filtroNoRecorridos;


    /**
     * Mount
     * @param $asignacionid
     */
    public function mount($asignacionid){
        $this->asignacionid = $asignacionid;
    }

    /**
     * Render
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('livewire.ejecutivo-evaluaciones-call-voz', [
            'estados' => Estado::where('tipo',1)->get(),
            'grabacionestados' => Estado::where('tipo',2)->get(),
            'asignacionfinal' => Asignacion::find($this->asignacionid),
            'evaluacionescompletas' => Evaluacion::where('asignacion_id','=',$this->asignacionid)->where('estado_id', '>',1)->where('estado_id', '<',6)->get(),
            'evaluaciones' => Evaluacion::where('asignacion_id','=',$this->asignacionid)
                ->when($this->searchMovil !== null, function ($query) {
                    $query->where('movil', 'like', "%" . trim($this->searchMovil) . "%");
                })
                ->when($this->filtroConnid !== null, function ($query) {
                    $query->where('connid', 'like', "%" . trim($this->filtroConnid) . "%");
                })
                ->when($this->filtroFecha !== null, function ($query) {
                    $query->where('fecha_grabacion', 'like', "%" . trim($this->filtroFecha) . "%");
                })
                ->when($this->filtroEstado > 0, function ($query) {
                    $query->where('estado_id', $this->filtroEstado);
                })
                ->when($this->filtroEstadoGrabacion > 0, function ($query) {
                    $query->where('estado_conversacion', $this->filtroEstadoGrabacion);
                })
                ->orderBy('fecha_grabacion', 'desc')->get()
        ]);
    }

}
