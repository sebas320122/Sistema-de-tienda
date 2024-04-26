<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Productos de muestra/pre-definidos
     */
    public function run(): void
    {
        /*
        DB::table('productos')->truncate();
        $fechaActual = now();
        DB::table('productos')->insert([
            [
                "Descripcion"=> 'Papas marca1 250gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> 'frituras',
                "Precio" => 30,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Papas marca1 600gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "frituras",
                "Precio" => 55,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Chocolate marca1',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "dulces",
                "Precio" => 20,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Chocolate marca2',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "dulces",
                "Precio" => 25,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Bollitos 100gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 35,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Bollitos 300gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 50,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Donas 100gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 29,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Queso 250gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "refrigerados",
                "Precio" => 60,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Pizza instantanea',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "refrigerados",
                "Precio" => 56,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Arroz 200gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "canasta basica",
                "Precio" => 30,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Frijoles 200gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "canasta basica",
                "Precio" => 34,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Galletas 78gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "galletas",
                "Precio" => 47,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Galletas 130gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "galletas",
                "Precio" => 47,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Refresco marca1 .5l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Refresco marca1 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Refresco marca2 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 30,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 .5l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "created_at" => $fechaActual,
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 30,
                "created_at" => $fechaActual,
            ]
        ]);
        */
    }
}
