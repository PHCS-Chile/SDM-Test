<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Hash;
use Illuminate\Database\Seeder;

/**
 * Class UsersSeeder
 * @package Database\Seeders
 * @version 2 (21-06-02)
 */
class UsersSeeder extends Seeder
{
    /**
     * Ejecuta el seeder
     *
     * @return void
     */
    public function run()
    {
        /* Insertar un usuario de prueba con credenciales de alto nivel */
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@asd.com',
            'password' => Hash::make('patata123'),
            'perfil' => 1
        ]);
        /* Crear usuarios con diferentes 'perfiles' */
        User::factory()->count(3)->perfil1()->create();
        User::factory()->count(4)->create();
    }

}
