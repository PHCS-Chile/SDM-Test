<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class EscalasSeeder
 * @package Database\Seeders
 * @version 3
 */
class EscalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escalas')->insert($this->escalas);
    }

    private $escalas = [
        ['id' => 4, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 1, 'name' => 'Bolsas, Servicios VAS o Servicios Restringidos'],
        ['id' => 6, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 2, 'name' => 'Beneficios Club Entel'],
        ['id' => 7, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 3, 'name' => 'Bloqueo por Robo o Perdida'],
        ['id' => 8, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 4, 'name' => 'Cambio de Equipo'],
        ['id' => 9, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 5, 'name' => 'Cambio de Plan o Condiciones comerciales'],
        ['id' => 10, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 6, 'name' => 'Campaña o Cross-selling'],
        ['id' => 11, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 7, 'name' => 'Canales de Atención'],
        ['id' => 12, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 8, 'name' => 'Carga Manual'],
        ['id' => 13, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 9, 'name' => 'Condiciones Comerciales de Planes, Servicios y Equipo'],
        ['id' => 14, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 11, 'name' => 'Contingencia de Servicios'],
        ['id' => 15, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 18, 'name' => 'Comunicación o Redes'],
        ['id' => 16, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 12, 'name' => 'Estado de Deuda o Reposición'],
        ['id' => 17, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 13, 'name' => 'Explicación de Boleta o Tráfico'],
        ['id' => 18, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 14, 'name' => 'Facturación o Solicitudes Asociadas'],
        ['id' => 19, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 15, 'name' => 'Funciones o Configuración de Equipo'],
        ['id' => 20, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 26, 'name' => 'Medios de Pago o Recarga'],
        ['id' => 21, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 17, 'name' => 'Objeción de Cobros'],
        ['id' => 22, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 19, 'name' => 'Renuncia o Retención'],
        ['id' => 23, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 20, 'name' => 'Roaming o LDI'],
        ['id' => 24, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 21, 'name' => 'Saldo o Cargo en ORGA'],
        ['id' => 25, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 22, 'name' => 'Seguimiento de Negocios'],
        ['id' => 26, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 27, 'name' => 'Seguros y Asistencias'],
        ['id' => 27, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 23, 'name' => 'Servicio Técnico de Equipos'],
        ['id' => 28, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 24, 'name' => 'Venta de Productos y Servicios'],
        ['id' => 29, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 25, 'name' => 'Otras Consultas o Requerimientos'],
        ['id' => 30, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 1, 'name' => 'Si'],
        ['id' => 31, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 2, 'name' => 'No, por pasos operacionales fuera de línea'],
        ['id' => 33, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 3, 'name' => 'No, por derivación a otro canal'],
        ['id' => 34, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 4, 'name' => 'No, por responsabilidad del Ejecutivo'],
        ['id' => 35, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 5, 'name' => 'No, por contingencias'],
        ['id' => 36, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 6, 'name' => 'No, por otro motivo'],
        ['id' => 37, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 1, 'name' => 'Falta de Formación Agente'],
        ['id' => 38, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 2, 'name' => 'Uso Incorrecto de Herramientas/Procedimientos'],
        ['id' => 39, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 3, 'name' => 'Faltas a la Ética'],
        ['id' => 40, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 4, 'name' => 'Falta a la capacidad de análisis'],
        ['id' => 41, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 5, 'name' => 'Actitud Profesional y/o Habilidades Blandas'],
        ['id' => 42, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 6, 'name' => 'No conoce cambios al procedimiento'],
        ['id' => 43, 'grupo_id' => 3, 'descripcion' => 'Responsable PEC - Pauta Call Voz', 'value' => 7, 'name' => 'Otro'],
        ['id' => 44, 'grupo_id' => 4, 'descripcion' => 'Ruidos o problemas de calidad en el audio - Pauta Call Voz', 'value' => 1, 'name' => 'Sin Observaciones'],
        ['id' => 45, 'grupo_id' => 4, 'descripcion' => 'Ruidos o problemas de calidad en el audio - Pauta Call Voz', 'value' => 2, 'name' => 'Ruido Ambiente'],
        ['id' => 46, 'grupo_id' => 4, 'descripcion' => 'Ruidos o problemas de calidad en el audio - Pauta Call Voz', 'value' => 3, 'name' => 'Intermitencias'],
        ['id' => 47, 'grupo_id' => 4, 'descripcion' => 'Ruidos o problemas de calidad en el audio - Pauta Call Voz', 'value' => 4, 'name' => 'Audio degradado o ecos'],
        ['id' => 48, 'grupo_id' => 4, 'descripcion' => 'Ruidos o problemas de calidad en el audio - Pauta Call Voz', 'value' => 5, 'name' => 'Alta latencia'],
        ['id' => 49, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 1, 'name' => 'No aplica'],
        ['id' => 50, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 2, 'name' => 'Portabilidad'],
        ['id' => 51, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 3, 'name' => 'Línea Adicional'],
        ['id' => 52, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 4, 'name' => 'Migración PP a SS'],
        ['id' => 53, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 5, 'name' => 'Servicios Hogar'],
        ['id' => 54, 'grupo_id' => 5, 'descripcion' => 'Tipo de Negocio - Pauta Call Voz', 'value' => 6, 'name' => 'Cambio de equipo'],
        ['id' => 55, 'grupo_id' => 2, 'descripcion' => 'Resolución en Linea', 'value' => 7, 'name' => 'No, Cliente no continua con la atención'],
        ['id' => 56, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 10, 'name' => 'Consultas 727'],
        ['id' => 57, 'grupo_id' => 1, 'descripcion' => 'Motivo', 'value' => 16, 'name' => 'Nursery'],

        ['id' => 58, 'grupo_id' => 6, 'descripcion' => 'Motivos', 'value' => 1, 'name' => 'Reclamo'],
        ['id' => 59, 'grupo_id' => 6, 'descripcion' => 'Motivos', 'value' => 2, 'name' => 'Consulta'],
        ['id' => 60, 'grupo_id' => 6, 'descripcion' => 'Motivos', 'value' => 3, 'name' => 'Requerimiento'],
    ];

}
