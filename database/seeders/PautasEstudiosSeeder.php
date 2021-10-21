<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PautasEstudiosSeeder
 * @package Database\Seeders
 * @version 1 (25/06/2021)
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
    ];

    /**
     * @var string[][] Estudios actualmente existentes. (Usar Factory?)
     */
    private $estudios = [
        ['name' => 'Call Center Digital', 'pauta_id' => 1],
        ['name' => 'Call Center Voz', 'pauta_id' => 2],
    ];

}
