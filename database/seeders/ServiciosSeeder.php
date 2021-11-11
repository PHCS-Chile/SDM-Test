<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ServiciosSeeder
 * @package Database\Seeders
 * @version 1 (21-06-02)
 */
class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert($this->servicios);
    }

    private $servicios = [
        ['name' => 'SCCP', 'status' => 1, 'estudio_id' => 1],
        ['name' => 'Konecta PE', 'status' => 1, 'estudio_id' => 1],
        ['name' => 'Konecta Perú', 'status' => 1, 'estudio_id' => 2],
        ['name' => 'Konecta Chile', 'status' => 1, 'estudio_id' => 2],
        ['name' => 'SCCP', 'status' => 1, 'estudio_id' => 2],
        ['name' => 'ECC','status' => 1, 'estudio_id' => 2],
        ['name' => 'A365', 'status' => 1, 'estudio_id' => 2],
        ['name' => 'A365', 'status' => 1, 'estudio_id' => 3],
        ['name' => 'Konecta Perú', 'status' => 1, 'estudio_id' => 3],
        ['name' => 'SCCP', 'status' => 1, 'estudio_id' => 3],
        ['name' => 'Ampliffica', 'status' => 1, 'estudio_id' => 3],
    ];

}
