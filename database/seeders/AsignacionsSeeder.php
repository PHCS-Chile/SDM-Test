<?php

namespace Database\Seeders;

use App\Models\Agente;
use App\Models\Asignacion;
use App\Models\Periodo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AsignacionsSeeder
 * @package Database\Seeders
 * @version 6
 */
class AsignacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Periodo::where('id' ,'>' ,0)->pluck('id')->toArray() as $periodo) {
            foreach (Agente::where('id' ,'>' ,0)->pluck('id')->toArray() as $agente) {
                $preset = ['periodo_id' => $periodo, 'agente_id'  => $agente];
                Asignacion::factory()->digital()->create($preset);
                Asignacion::factory()->callVoz()->create($preset);
            }
        }
    }

}
