<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //crear categorias , musica, deportes, tecnologia

        Categoria::create([
            'nombre' => 'Musica',

        ]);

        Categoria::create([
            'nombre' => 'Deportes',

        ]);

        Categoria::create([
            'nombre' => 'Tecnologia',

        ]);

        Categoria::create([
            'nombre' => 'Cine',

        ]);

        Categoria::create([
            'nombre' => 'Libros',

        ]);


        Categoria::create([
            'nombre' => 'Viajes',

        ]);

        Categoria::create([
            'nombre' => 'Cocina',

        ]);

        Categoria::create([
            'nombre' => 'Teatro',
        ]);
    }
}
