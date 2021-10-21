<?php

namespace Database\Seeders;

use App\Models\Atributo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class AtributosSeeder
 * @package Database\Seeders
 * @version 2
 */
class AtributosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atributos')->insert($this->atributos);
        Atributo::destroy(72);  /* Evita problemas con IDs en versiones iniciales */
        Atributo::destroy(96);  /* Evita problemas con IDs en versiones iniciales */
        Atributo::destroy(167);  /* Evita problemas con IDs en versiones iniciales */
        Atributo::destroy(170);  /* Evita problemas con IDs en versiones iniciales */
        Atributo::destroy(175);  /* Evita problemas con IDs en versiones iniciales */
    }

    /*
     * TODO: Utilizar factory
     */
    private $atributos = [
        // Atributos Pauta Digital, parte 1 (1 > 71)
        ['name' => 'No saluda o indica nombre al iniciar la conversación', 'name_interno' => 'saludo1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No usa preguntas o frases de conexión inicial', 'name_interno' => 'saludo2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No Valida contexto indicado previamente', 'name_interno' => 'saludo3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No se despide y/o realiza de forma poco cordial', 'name_interno' => 'saludo4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'No agradece contacto al despedirse', 'name_interno' => 'saludo5', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 6, 'name_categoria' => 'PENC'],
        ['name' => 'Protocolo de saludo y despedida', 'name_interno' => 'saludo6', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza frases formales y/o poco cercanas', 'name_interno' => 'frases1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza conceptos técnicos', 'name_interno' => 'frases2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza frases coloquiales y/o abreviaturas', 'name_interno' => 'frases3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Utiliza más de un emoticón por comentario', 'name_interno' => 'frases4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 11, 'name_categoria' => 'PENC'],
        ['name' => 'Se comunica de forma simple y cercana', 'name_interno' => 'frases5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No manifesta dispoción para atender', 'name_interno' => 'cordialidad1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No demuestra interes frente a dificultades', 'name_interno' => 'cordialidad2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No pide disculpas en caso de reclamos', 'name_interno' => 'cordialidad3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'No reduce el conflicto frente a cliente alterados', 'name_interno' => 'cordialidad4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 16, 'name_categoria' => 'PENC'],
        ['name' => 'Demuestra cordialidad y/o reduce conflictos', 'name_interno' => 'cordialidad5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No Entrega la información de manera ordenada', 'name_interno' => 'gestionplantillas1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Usa plantillas o imágenes en exceso', 'name_interno' => 'gestionplantillas2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Usa plantillas o información irrelevantes para la gestión', 'name_interno' => 'gestionplantillas3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Vuelve a solicitar la misma información mas de una vez', 'name_interno' => 'gestionplantillas4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 21, 'name_categoria' => 'PENC'],
        ['name' => 'Gestión de plantillas e información', 'name_interno' => 'gestionplantillas5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Errores semánticos y/o sintácticos', 'name_interno' => 'ortografia1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Mal uso de reglas de puntuación (puntos y coma)', 'name_interno' => 'ortografia2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Errores de escrituras y aplicación de reglas ortográficas (español)', 'name_interno' => 'ortografia3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Escritura incorrecta de palabras técnicas o de origen extranjero', 'name_interno' => 'ortografia4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Mal uso del acento diacrítico', 'name_interno' => 'ortografia5', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Uso incorrecto de Mayúsculas/Minúsculas', 'name_interno' => 'ortografia6', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 28, 'name_categoria' => 'PENC'],
        ['name' => 'Ortografía y redacción', 'name_interno' => 'ortografia7', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No personaliza durante la conversación', 'name_interno' => 'personalizacion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'Trata al cliente por un nombre/usuario erróneo', 'name_interno' => 'personalizacion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Personalización', 'name_interno' => 'personalizacion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 32, 'name_categoria' => 'PENC'],
        ['name' => 'Se refiere al Cliente por su nombre', 'name_interno' => 'personalizacion4', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Proyecta inseguridad o falta de conocimientos', 'name_interno' => 'seguridad1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 35, 'name_categoria' => 'PENC'],
        ['name' => 'Se autocorrige o se contradice en la conversación', 'name_interno' => 'seguridad2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 35, 'name_categoria' => 'PENC'],
        ['name' => 'Proyecta seguridad y dominio de la información', 'name_interno' => 'seguridad3', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No menciona la necesidad de dejar en espera', 'name_interno' => 'manejosilencios1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'No retoma la conversación en los tiempos definidos', 'name_interno' => 'manejosilencios2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'No agradece el tiempo de espera', 'name_interno' => 'manejosilencios3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 39, 'name_categoria' => 'PENC'],
        ['name' => 'Maneja correctamente los tiempos de espera', 'name_interno' => 'manejosilencios4', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No realiza aseguramiento de lo informado', 'name_interno' => 'aseguramiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 42, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Aseguramiento', 'name_interno' => 'aseguramiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 42, 'name_categoria' => 'PENC'],
        ['name' => 'Asegura la comprensión de información entregada', 'name_interno' => 'aseguramiento3', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No realiza ofrecimiento comercial a titular', 'name_interno' => 'ofrecimiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'No argumenta o intenta revertir objeciones', 'name_interno' => 'ofrecimiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'Realiza ofrecimiento comercial a usuario no autorizado', 'name_interno' => 'ofrecimiento3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'No Aplica Ofrecimiento Comercial', 'name_interno' => 'ofrecimiento4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 45, 'name_categoria' => 'PENC'],
        ['name' => 'Ofrece nuevos productos/servicios', 'name_interno' => 'ofrecimiento5', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Motivo del llamado', 'name_interno' => 'motivo', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Tipo de Gestión 1', 'name_interno' => 'gestion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Tipo de Gestión 2', 'name_interno' => 'gestion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Tipo de Gestión 3', 'name_interno' => 'gestion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 1', 'name_interno' => 'deteccion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 2', 'name_interno' => 'deteccion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades 3', 'name_interno' => 'deteccion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Detección de necesidades Full', 'name_interno' => 'deteccion4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 1', 'name_interno' => 'infocorrecta1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 2', 'name_interno' => 'infocorrecta2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa 3', 'name_interno' => 'infocorrecta3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Entrega de información correcta y completa Full', 'name_interno' => 'infocorrecta4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 1', 'name_interno' => 'procedimiento1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 2', 'name_interno' => 'procedimiento2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema 3', 'name_interno' => 'procedimiento3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Gestiona según proced. en sistema Full', 'name_interno' => 'procedimiento4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 1 ', 'name_interno' => 'resolucion1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 2', 'name_interno' => 'resolucion2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea 3', 'name_interno' => 'resolucion3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestion'],
        ['name' => 'Error grave en la detección de necesidades y en el analisis de la información', 'name_interno' => 'pecu_deteccion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por Info incorrecta o incompleta', 'name_interno' => 'pecu_infocorrecta', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por no resolver o resolver de forma errónea', 'name_interno' => 'pecu_procedimiento', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Atención Irrespetuosa y Gestión poco Profesional', 'name_interno' => 'pecu_pocoprofesional', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Manipula al Cliente para concretar venta', 'name_interno' => 'pecu_manipulacliente', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],

        // Atributo 72 (no existe)
        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        // Atributos Pauta Digital, parte 2 (73 > 95)
        ['name' => 'Cierre anticipado de la Interacción ', 'name_interno' => 'pecu_cierreinteraccion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Provoca o incita el cierre por inactividad', 'name_interno' => 'pecu_provocacierre', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Entrega Beneficio o Excepción comercial fuera de Procedimiento', 'name_interno' => 'pecn_beneficio', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Fraude', 'name_interno' => 'pecn_fraude', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'No Sondea motivo de renuncia o no Retiene', 'name_interno' => 'pecn_nosondea', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'No Tipifica en sistema o lo realiza de manera incorrecta.', 'name_interno' => 'pecn_tipificacion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Validación de Factibilidad Técnica y Comercial', 'name_interno' => 'pecn_factibilidad', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Otra Gestión Indebida', 'name_interno' => 'pecn_otragestion', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Entrega información confidencial', 'name_interno' => 'pecc_infoconfidencial', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No valida correctamente los datos personales del Cliente', 'name_interno' => 'pecc_novalidadatos', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No realiza cierre de negocio según procedimiento', 'name_interno' => 'pecc_cierre', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Omite o Indica erróneamente información que es regulada legalmente', 'name_interno' => 'pecc_infoerronea', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No comprende el motivo del Cliente', 'name_interno' => 'asistentevirtual1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente insiste mas de una vez en contacto con ejecutivo', 'name_interno' => 'asistentevirtual2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Deriva de forma incorrecta al ejecutivo', 'name_interno' => 'asistentevirtual3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Abandonos previos por parte de otros ejecutivos', 'name_interno' => 'gestionesanteriores1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Abandonos previos por parte del Cliente', 'name_interno' => 'gestionesanteriores2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Más de una conversación reciente por el mismo motivo (NO FCR)', 'name_interno' => 'gestionesanteriores3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente molesto por la atención de la asistente virtual', 'name_interno' => 'usuarios1', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente molesto por la atención de los ejecutivos del canal', 'name_interno' => 'usuarios2', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Cliente solicita ser contactado telefónicamente', 'name_interno' => 'usuarios3', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Retroalimentacion', 'name_interno' => 'retroalimentacion', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
        ['name' => 'Comentario Interno', 'name_interno' => 'comentario_interno', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Memo'],

        // Atributo 96 (no existe)
        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        // Atributos Pauta Call Voz, parte 1 (97 > 166)
        ['name' => 'Protocolo de Saludo y Despedida', 'name_interno' => 'saludo1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No hace Bienvenida', 'name_interno' => 'saludo2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 97, 'name_categoria' => 'PENC'],
        ['name' => 'No se despide', 'name_interno' => 'saludo3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 97, 'name_categoria' => 'PENC'],
        ['name' => 'No utiliza contexto', 'name_interno' => 'saludo4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 97, 'name_categoria' => 'PENC'],
        ['name' => 'Disposición para la atención', 'name_interno' => 'disposicion1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Interrumpe', 'name_interno' => 'disposicion2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 101, 'name_categoria' => 'PENC'],
        ['name' => 'No retiene información', 'name_interno' => 'disposicion3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 101, 'name_categoria' => 'PENC'],
        ['name' => 'Cordialidad y reducción de conflicto', 'name_interno' => 'cordialidad1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No muestra interés', 'name_interno' => 'cordialidad2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 104, 'name_categoria' => 'PENC'],
        ['name' => 'No reduce conflicto', 'name_interno' => 'cordialidad3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 104, 'name_categoria' => 'PENC'],
        ['name' => 'No manifiesta disposición', 'name_interno' => 'cordialidad4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 104, 'name_categoria' => 'PENC'],
        ['name' => 'No pide disculpas', 'name_interno' => 'cordialidad5', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 104, 'name_categoria' => 'PENC'],
        ['name' => 'Manejo de Silencios', 'name_interno' => 'manejosilencios1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No informa Pausa/Hold', 'name_interno' => 'manejosilencios2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 109, 'name_categoria' => 'PENC'],
        ['name' => 'No interactua', 'name_interno' => 'manejosilencios3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 109, 'name_categoria' => 'PENC'],
        ['name' => 'No agradece espera', 'name_interno' => 'manejosilencios4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 109, 'name_categoria' => 'PENC'],
        ['name' => 'Seguridad y Dominio en la conversación con el Cliente', 'name_interno' => 'seguridad1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Inseguridad en conocimientos', 'name_interno' => 'seguridad2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 113, 'name_categoria' => 'PENC'],
        ['name' => 'Mal manejo de la información', 'name_interno' => 'seguridad3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 113, 'name_categoria' => 'PENC'],
        ['name' => 'Se contradice y autocorrige', 'name_interno' => 'seguridad4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 113, 'name_categoria' => 'PENC'],
        ['name' => 'No informa el motivo de uso de datos personales', 'name_interno' => 'seguridad5', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 113, 'name_categoria' => 'PENC'],
        ['name' => 'Comunicación simple y empática', 'name_interno' => 'comunicacion1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'Trato cercano y cordial', 'name_interno' => 'comunicacion2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 118, 'name_categoria' => 'PENC'],
        ['name' => 'Palabras coloquiales', 'name_interno' => 'comunicacion3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 118, 'name_categoria' => 'PENC'],
        ['name' => 'Usa tecnicismos', 'name_interno' => 'comunicacion4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 118, 'name_categoria' => 'PENC'],
        ['name' => 'Educar al Cliente en Canales de Autotención', 'name_interno' => 'educacliente1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No menciona otros canales', 'name_interno' => 'educacliente2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 122, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Por posible molestia', 'name_interno' => 'educacliente3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 122, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Sin opciones', 'name_interno' => 'educacliente4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 122, 'name_categoria' => 'PENC'],
        ['name' => 'Aseguramiento', 'name_interno' => 'aseguramiento1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No valida información entregada', 'name_interno' => 'aseguramiento2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 126, 'name_categoria' => 'PENC'],
        ['name' => 'N/A por transfer/Callback', 'name_interno' => 'aseguramiento3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 126, 'name_categoria' => 'PENC'],
        ['name' => 'N/A canal incorrecto', 'name_interno' => 'aseguramiento4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 126, 'name_categoria' => 'PENC'],
        ['name' => 'N/A por posible molestia', 'name_interno' => 'aseguramiento5', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 126, 'name_categoria' => 'PENC'],
        ['name' => 'N/A cliente asegura info', 'name_interno' => 'aseguramiento6', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 126, 'name_categoria' => 'PENC'],
        ['name' => 'Ofrecimiento Comercial', 'name_interno' => 'ofrecimientocomercial1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No Asesora', 'name_interno' => 'ofrecimientocomercial2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'No Ofrece Acorde', 'name_interno' => 'ofrecimientocomercial3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Plataforma Especialista', 'name_interno' => 'ofrecimientocomercial4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Cliente Indispuesto', 'name_interno' => 'ofrecimientocomercial5', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A No es titular o usuario registrado', 'name_interno' => 'ofrecimientocomercial6', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Sin Factibilidad Comercial', 'name_interno' => 'ofrecimientocomercial7', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Sin Factibilidad Técnica', 'name_interno' => 'ofrecimientocomercial8', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Problemas Técnicos', 'name_interno' => 'ofrecimientocomercial9', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Otros', 'name_interno' => 'ofrecimientocomercial10', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 132, 'name_categoria' => 'PENC'],
        ['name' => 'Frases de Enganche y Argumentación ', 'name_interno' => 'frasesenganche1', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'PENC'],
        ['name' => 'No argumenta', 'name_interno' => 'frasesenganche2', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 142, 'name_categoria' => 'PENC'],
        ['name' => 'Usa argumentos erroneos', 'name_interno' => 'frasesenganche3', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 142, 'name_categoria' => 'PENC'],
        ['name' => 'N/A Sin ofrecimiento comercial', 'name_interno' => 'frasesenganche4', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => 142, 'name_categoria' => 'PENC'],
        ['name' => 'Error grave en la detección de necesidades y en el analisis de la información', 'name_interno' => 'pecu_deteccion', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por Info incorrecta o incompleta', 'name_interno' => 'pecu_gestionincorrecta', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Error grave en la gestión por no resolver o resolver de forma errónea', 'name_interno' => 'pecu_noresuelve', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Atendió de forma grosera', 'name_interno' => 'pecu_atenciongrosera', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Se desentiende o es poco profesional', 'name_interno' => 'pecu_pocoprofesional', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'Manipula al Cliente para concretar venta', 'name_interno' => 'pecu_manipulacliente', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC UF'],
        ['name' => 'No sondea motivo de renuncia o no Retiene', 'name_interno' => 'pecn_nosondea', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Descalificó a ENTEL', 'name_interno' => 'pecn_descalificaentel', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Entrega Beneficio o Excepción comercial fuera de Procedimiento', 'name_interno' => 'pecn_beneficiofueraproc', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Fraude', 'name_interno' => 'pecn_fraude', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'No libera la línea una vez finalizada la llamada', 'name_interno' => 'pecn_noliberalinea', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Validación de Factibilidad Técnica y Comercial', 'name_interno' => 'pecn_factibilidad', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Ingreso a Sistema', 'name_interno' => 'pecn_notipificasistema', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Otra Gestión Indebida', 'name_interno' => 'pecn_otragestion', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC NEG'],
        ['name' => 'Niega Escalamiento o Ingreso de Reclamo', 'name_interno' => 'pecc_niegaescalamiento', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Omite o Indica erróneamente información que es regulada legalmente', 'name_interno' => 'pecc_omiteinformacion', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Entregó información confidencial', 'name_interno' => 'pecc_infoconfidencial', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Cierre de negocios', 'name_interno' => 'pecc_cierrenegocios', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No Valida correctamente los datos personales del cliente', 'name_interno' => 'pecc_novalidadatos', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'No coordina correctamente Despacho/Entrega/Instalación', 'name_interno' => 'pecc_despacho', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC CUMP'],
        ['name' => 'Responsable PEC', 'name_interno' => 'pec_responsable', 'pauta_id' => 2, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'PEC'],

        // Atributo 167 (no existe)
        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        // Atributos Pauta Call Voz, parte 2 (168 > 169)
        ['name' => 'Ruidos o problemas de calidad en el audio', 'name_interno' => 'otro_ruidoenllamada', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Uso de frases tipo o scripts para la comunicación', 'name_interno' => 'otro_frasesyscripts', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],

        // Atributo 170 (no existe)
        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        // Atributos Pauta Call Voz, parte 3 (171 > 174)
        ['name' => 'Tipo de Negocio', 'name_interno' => 'otro_tiponegocio', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Ofrecimiento de más de una Línea', 'name_interno' => 'otro_ofrecimientomultilinea', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Ofrecimiento de equipo', 'name_interno' => 'otro_ofrecimientoequipo', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Ofrecimiento de accesorios', 'name_interno' => 'otro_ofrecimientoaccesorio', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],

        // Atributo 175 (no existe)
        ['name' => 'NO EXISTE', 'name_interno' => 'noexiste', 'pauta_id' => 1, 'check_primario' => 1, 'check_ec' => 1, 'id_primario' => NULL, 'name_categoria' => 'NO'],

        // Atributos Pauta Call Voz, parte 4 (176 > 177)
        ['name' => 'Retroalimentacion', 'name_interno' => 'retroalimentacion', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
        ['name' => 'Comentario Interno', 'name_interno' => 'comentario_interno', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Memo'],

        // Atributo Pauta Digital, resagado (178)
        ['name' => 'No informa el motivo de uso de datos personales', 'name_interno' => 'seguridad4', 'pauta_id' => 1, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => 35, 'name_categoria' => 'PENC'],

        // Atributos Pauta Call Voz, parte 4 (179 > 199)
        ['name' => 'Motivo del llamado', 'name_interno' => 'motivo', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Caracterizacion'],
        ['name' => 'Tipo de Gestión', 'name_interno' => 'tipogestion1', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Tipo de Gestión', 'name_interno' => 'tipogestion2', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Tipo de Gestión', 'name_interno' => 'tipogestion3', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Detección de necesidades/sondeo/analisis/revisión', 'name_interno' => 'deteccion1', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Detección de necesidades/sondeo/analisis/revisión', 'name_interno' => 'deteccion2', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Detección de necesidades/sondeo/analisis/revisión', 'name_interno' => 'deteccion3', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Detección de necesidades/sondeo/analisis/revisión FULL', 'name_interno' => 'deteccion4', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Entrega de información correcta y completa', 'name_interno' => 'infocorrecta1', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Entrega de información correcta y completa', 'name_interno' => 'infocorrecta2', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Entrega de información correcta y completa', 'name_interno' => 'infocorrecta3', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Entrega de información correcta y completa FULL', 'name_interno' => 'infocorrecta4', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Gestiona según proced. en sistema', 'name_interno' => 'gestiona1', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Gestiona según proced. en sistema', 'name_interno' => 'gestiona2', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Gestiona según proced. en sistema', 'name_interno' => 'gestiona3', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Gestiona según proced. en sistema FULL', 'name_interno' => 'gestiona4', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea', 'name_interno' => 'resolucion1', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea', 'name_interno' => 'resolucion2', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea', 'name_interno' => 'resolucion3', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Ejecutivo Resuelve el problema de origen en línea FULL', 'name_interno' => 'resolucion4', 'pauta_id' => 2, 'check_primario' => 0, 'check_ec' => 0, 'id_primario' => NULL, 'name_categoria' => 'Gestión'],
        ['name' => 'Descripción del Caso', 'name_interno' => 'descripcion_caso', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
        ['name' => 'Respuesta del Ejecutivo', 'name_interno' => 'respuesta_ejecutivo', 'pauta_id' => 2, 'check_primario' => NULL, 'check_ec' => NULL, 'id_primario' => NULL, 'name_categoria' => 'Memo'],
    ];

}
