<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CentroayudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centroAyudaId = DB::table('centro_ayudas')->insertGetId([
            'nombre_centro' => 'F.E.L.C.V.',
            'descripcion' => 'Fuerza Especial de Lucha contra la Violencia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'Av. Sucre y calle Bolívar edif. FELCC, La Paz, Bolivia',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'591(2)2285495',
            'id_centroAyuda' => $centroAyudaId,
        ]);
        
        DB::table('contactos')->insert([
            'contacto'=>'591(2)2282211',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'591(2)2786161',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        $centroAyudaId = DB::table('centro_ayudas')->insertGetId([
            'nombre_centro' => 'Defensoria del pueblo',
            'descripcion' => 'institución al servicio del pueblo para la defensa, vigencia y promoción de los derechos 
            humanos con énfasis con las poblaciones en situación de vulnerabilidad y sectores desfavorecidos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'Oficina Central Calle Colombia N°440
            entre Héroes del Acre y Gral. Gonzales',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'(LA PAZ) Calle Capitán Ravelo Nº 2329, Edificio Excélsior, Piso 5.',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'(COCHABAMBA) Calle 16 de Julio N° 680, (Plazuela Constitución)',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'(SANTA CRUZ) Calle Andrés Ibañez Nº 241, entre 21 de Mayo y España',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'800 10 8004',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'2113600',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'2112600',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        $centroAyudaId = DB::table('centro_ayudas')->insertGetId([
            'nombre_centro' => 'Coordinadora de la Mujer',
            'descripcion' => 'En 1986 se fundó la Coordinadora de la Mujer (CM) como una instancia de reflexión, formación y propuesta, 
            dirigida a la sociedad y al Estado, para mejorar la posición de las mujeres en nuestro país',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'Av. Arce 2132, Edificio Illampu, Piso 1, Oficina A',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'2444923',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        $centroAyudaId = DB::table('centro_ayudas')->insertGetId([
            'nombre_centro' => 'Fundación Pro Mujer',
            'descripcion' => 'Pro mujer es una empresa social que desde hace más de 33 años trabaja por avanzar hacia la igualdad de género en américa latina.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('direccions')->insert([
            'direccion'=>'Av. Hernando Siles No. 5411, Edif. Loyola II, Z. Obrajes.',
            'id_centroAyuda' => $centroAyudaId,
        ]);

        DB::table('contactos')->insert([
            'contacto'=>'2114914',
            'id_centroAyuda' => $centroAyudaId,
        ]);


    }
}
