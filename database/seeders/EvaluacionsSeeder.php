<?php

namespace Database\Seeders;

use App\Models\Asignacion;
use App\Models\Evaluacion;
use Illuminate\Database\Seeder;


/**
 * Class EvaluacionsSeeder
 * @package Database\Seeders
 * @version 2
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
            Evaluacion::factory()->count(rand(1, 3))->create(['asignacion_id' => $asignacion]);
        }
    }
}
