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
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> 'frituras',
                "Precio" => 30,
            ],
            [
                "Descripcion"=> 'Papas marca1 600gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "frituras",
                "Precio" => 55,
            ],
            [
                "Descripcion"=> 'Chocolate marca1',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "dulces",
                "Precio" => 20,
            ],
            [
                "Descripcion"=> 'Chocolate marca2',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "dulces",
                "Precio" => 25,
            ],
            [
                "Descripcion"=> 'Bollitos 100gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 35,
            ],
            [
                "Descripcion"=> 'Bollitos 300gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 50,
            ],
            [
                "Descripcion"=> 'Donas 100gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "pan dulce",
                "Precio" => 29,
            ],
            [
                "Descripcion"=> 'Queso 250gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "refrigerados",
                "Precio" => 60,
            ],
            [
                "Descripcion"=> 'Pizza instantanea',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "refrigerados",
                "Precio" => 56,
            ],
            [
                "Descripcion"=> 'Arroz 200gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "canasta basica",
                "Precio" => 30,
            ],
            [
                "Descripcion"=> 'Frijoles 200gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "canasta basica",
                "Precio" => 34,
            ],
            [
                "Descripcion"=> 'Galletas 78gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "galletas",
                "Precio" => 47,
            ],
            [
                "Descripcion"=> 'Galletas 130gr',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "galletas",
                "Precio" => 47,
            ],
            [
                "Descripcion"=> 'Refresco marca1 .5l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
            ],
            [
                "Descripcion"=> 'Refresco marca1 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
            ],
            [
                "Descripcion"=> 'Refresco marca2 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 30,
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 .5l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 20,
            ],
            [
                "Descripcion"=> 'Jugo naranja marca1 1l',
                "En_exhibicion"=> 100,
                "En_almacen"=> 10,
                "Categoria"=> "bebidas",
                "Precio" => 30,
            ]
        ]);
        //
    }
}
