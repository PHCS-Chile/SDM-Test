<?php

namespace Database\Seeders;

use App\Models\Asignacion;
use App\Models\Evaluacion;
use App\Models\Notificacion;
use Illuminate\Database\Seeder;


/**
 * Class EvaluacionsSeeder
 * @package Database\Seeders
 * @version 3
 */
class EvaluacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Asignacion::where('id' ,'>' ,0)->pluck('id')->toArray() as $asignacion) {
            Evaluacion::factory()->count(rand(1, 2))->create(['asignacion_id' => $asignacion]);
        }
        $evaluacionesEnRevision = Evaluacion::where('estado_id', 3)->get();
        foreach ($evaluacionesEnRevision as $evaluacion) {
            Notificacion::notificar($evaluacion->id);
        }
    }
}
