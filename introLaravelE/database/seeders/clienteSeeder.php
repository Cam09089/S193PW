<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'correo' => 'correoexample@gamil.com',
                'telefono' => '1234567890'
            ],
            [
                'nombre' => 'Maria',
                'apellido' => 'Gomez',
                'correo' => 'ejemplo@gmail.com',
                'telefono' => '0987654321'
            ],[
                'nombre' => 'Pedro',
                'apellido' => 'Ramirez',
                'correo' => 'pedrr@gamil.com',
                'telefono' => '1234567890'
            ]
        ]);
    }
}