<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // Ejecutar seeders
        $this->call([
            ProductosSeeder::class,
            UsuarioSeeder::class
        ]);
    }
}
