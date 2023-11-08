<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rol')->insert([
            'id_rol' => '1',
            'nombre' => 'Administrador'
        ]);
        DB::table('rol')->insert([
            'id_rol' => '2',
            'nombre' => 'Encargado'
        ]);
        DB::table('rol')->insert([
            'id_rol' => '3',
            'nombre' => 'Usuario'
        ]);
    }
}
