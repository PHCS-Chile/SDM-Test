<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AgentesSeeder
 * @package Database\Seeders
 * @version 2
 */
class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agentes')->insert($this->agentes);
    }

    /*
     * TODO: Utilizar factory
     */
    private $agentes = [
        ['name' => 'SCCP Hogar Fibra',
            'habilidad' => 'Hogar Fibra',
            'campana' => 'FIBRA',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Hogar',
            'status' => 1,
            'servicio_id' => 1],
        ['name' => 'SCCP Hogar Inalambrico',
            'habilidad' => 'Hogar Inalambrico',
            'campana' => 'HOGAR_INALAMBRICO',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Hogar',
            'status' => 1,
            'servicio_id' => 1],
        ['name' => 'SCCP Cuenta Controlada',
            'habilidad' => 'Cuenta Controlada',
            'campana' => 'NURSERY_CC',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 1],
        ['name' => 'SCCP Prepago',
            'habilidad' => 'Prepago',
            'campana' => 'PREPAGO',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 1],
        ['name' => 'SCCP S2S Hogar',
            'habilidad' => 'S2S Hogar',
            'campana' => 'S2S_HOGAR',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 1],
        ['name' => 'KONPE RRSS',
            'habilidad' => 'Facebook y Twitter',
            'campana' => 'FACEBOOK TWITTER',
            'tipo_habilidad' => 'RRSS',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'KONPE Cuenta Controlada',
            'habilidad' => 'Cuenta Controlada',
            'campana' => 'NURSERY_CC',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'KONPE Roaming',
            'habilidad' => 'Roaming',
            'campana' => 'ROAMING',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'KONPE S2S Movil',
            'habilidad' => 'S2S Movil',
            'campana' => 'S2S_MOVIL',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'KONPE Suscripcion',
            'habilidad' => 'Suscripcion',
            'campana' => 'SUSCRIPCION',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'KONPE Venta Privada',
            'habilidad' => 'Venta Privada',
            'campana' => 'VENTA_PRIVADA',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Móvil',
            'status' => 1,
            'servicio_id' => 2],
        ['name' => 'TEMPORAL',
            'habilidad' => 'CC Temp',
            'campana' => 'Temp',
            'tipo_habilidad' => 'Whatsapp',
            'mercado' => 'Temp',
            'status' => 2,
            'servicio_id' => 2],
    ];

}
