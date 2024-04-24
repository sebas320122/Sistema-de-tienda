<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Crear usuario admin
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                "nombre"=> 'Usuario inicial',
                "email"=> 'inicial@gmail.com',
                "password"=> Hash::make('inicial'),
                "puesto"=> 'Admin',
                "created_at"=> now()
            ]
        ]);
    }
}
