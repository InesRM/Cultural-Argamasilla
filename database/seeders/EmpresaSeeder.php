<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Empresa::factory()->count(5)->create();

        DB::table('empresas')->insert([
            'nombre'=> 'admin',
            'direccion' => 'admin',
            'telefono' => 'admin',
            'email' => 'admin',
            'web' => 'admin',
            'informacionExtra' => 'admin',
        ]);

        DB::table('empresas')->insert([
            'nombre'=> 'asistente',
            'direccion' => 'asistente',
            'telefono' => 'asistente',
            'email' => 'asistente',
            'web' => 'asistente',
            'informacionExtra' => 'asistente',
        ]);
    }
}
