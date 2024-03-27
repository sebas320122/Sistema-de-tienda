<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Productos de muestra, comentar al momento de entregar la aplicacion
        DB::table('productos')->truncate();
        DB::table('productos')->insert([
            [
                "Descripcion"=> 'Papas marca1 250gr',
                "Categoria"=> 'frituras',
                "Precio" => 30,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Papas marca1 600gr',
                "Categoria"=> "frituras",
                "Precio" => 55,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Chocolate marca1',
                "Categoria"=> "dulces",
                "Precio" => 20,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Chocolate marca2',
                "Categoria"=> "dulces",
                "Precio" => 25,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Bollitos 100gr',
                "Categoria"=> "pan dulce",
                "Precio" => 35,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Bollitos 300gr',
                "Categoria"=> "pan dulce",
                "Precio" => 50,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Donas 100gr',
                "Categoria"=> "pan dulce",
                "Precio" => 29,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Queso 250gr',
                "Categoria"=> "refrigerados",
                "Precio" => 60,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Pizza instantanea',
                "Categoria"=> "refrigerados",
                "Precio" => 56,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Arroz 200gr',
                "Categoria"=> "canasta basica",
                "Precio" => 30,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Frijoles 200gr',
                "Categoria"=> "canasta basica",
                "Precio" => 34,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Galletas 78gr',
                "Categoria"=> "galletas",
                "Precio" => 47,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Galletas 130gr',
                "Categoria"=> "galletas",
                "Precio" => 47,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Refresco marca1 .5l',
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Refresco marca1 1l',
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Refresco marca2 1l',
                "Categoria"=> "bebidas",
                "Precio" => 30,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 .5l',
                "Categoria"=> "bebidas",
                "Precio" => 20,
                "Descuento" => 0
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 1l',
                "Categoria"=> "bebidas",
                "Precio" => 30,
                "Descuento" => 0
            ]
        ]);
        //
    }
}
