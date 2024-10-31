<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(50)->create();

        //Para crear un administrador
        /*
        DB::table('users')->insert([
            'nombre' => 'Ines',
            'apellidos' => 'Ruiz',
            'edad' => 30,
            'direccion' => 'C/ Federico García Lorca',
            'ciudad' => 'Vera',
            'telefono' => '666888777',
            'email' => 'ines@correo.es',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'rol' => "admin",
            'empresa_id' => 6,
        ]);
        */
    }
}
