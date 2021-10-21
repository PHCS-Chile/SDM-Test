<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

/**
 * Class EstadosSeeder
 * @package Database\Seeders
 * @version 4
 */
class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert($this->estados);
    }

    /**
     * @var array[] Estados actualmente utilizados
     */
    private $estados = [
        // Evaluación (1-6)
        ['name' => 'En Blanco', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Completa', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Enviada a Revision', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Para enviar EC', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Completa y Revisada', 'visible' => 1, 'tipo' => 1],
        ['name' => 'Descartada', 'visible' => 1, 'tipo' => 1],
        // Grabaciones (7-10)
        ['name' => 'No Recorrida', 'visible' => 1, 'tipo' => 2],
        ['name' => 'Con Grabacion', 'visible' => 1, 'tipo' => 2],
        ['name' => 'Sin Grabación', 'visible' => 1, 'tipo' => 2],
        ['name' => 'Grabación no Evaluable', 'visible' => 1, 'tipo' => 2],
        // Reportes (11-13)
        ['name' => 'Sin Reporte', 'visible' => 1, 'tipo' => 3],
        ['name' => 'Revisado Para Enviar', 'visible' => 1, 'tipo' => 3],
        ['name' => 'Revisado Enviado', 'visible' => 1, 'tipo' => 3],
    ];

}
