<?php

namespace App\Http\Livewire;

use App\Models\Notificacion;
use Livewire\Component;

class Notificaciones extends Component
{

    public $pagination = 10;
    public $filtroLeida = 0;
    public $filtroEstudio;

    public function render()
    {
        return view('livewire.notificaciones', [
            'notificaciones' => Notificacion::where('activa', true)
                ->when($this->filtroLeida != 99, function ($query) {
                    $query->where('leida', $this->filtroLeida == 1);
                })
                ->paginate($this->pagination)
        ]);
    }
}
