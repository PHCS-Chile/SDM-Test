<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PautasEstudiosSeeder
 * @package Database\Seeders
 * @version 2
 */
class PautasEstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pautas')->insert($this->pautas);
        DB::table('estudios')->insert($this->estudios);
    }

    /**
     * @var string[][] Pautas actualmente existentes. (Usar Factory?)
     */
    private $pautas = [
        ['name' => 'Whatsapp', 'descripcion' => 'pauta de whatsapp'],
        ['name' => 'Voz', 'descripcion' => 'Pauta Call Center Voz'],
        ['name' => 'VentasRemotas', 'descripcion' => 'Pauta Ventas Remotas'],
        ['name' => 'BackOffice', 'descripcion' => 'Pauta Back Office'],
        ['name' => 'Retenciones', 'descripcion' => 'Pauta Retenciones'],
    ];

    /**
     * @var string[][] Estudios actualmente existentes. (Usar Factory?)
     */
    private $estudios = [
        ['name' => 'EPCS Call Center Canales Digitales', 'pauta_id' => 1],
        ['name' => 'EPCS Call Center Voz', 'pauta_id' => 2],
        ['name' => 'EPCS Ventas Remotas', 'pauta_id' => 3],
        ['name' => 'Back Office', 'pauta_id' => 4],
        ['name' => 'Call Center Retenciones', 'pauta_id' => 5],
    ];

}
