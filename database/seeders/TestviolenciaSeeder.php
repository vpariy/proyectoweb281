<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TestviolenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Datos de prueba para la tabla testviolencia
         $preguntas = [
            'Te hace bromas hirientes o piropos ofensivos',
            'Se burla de vos. Te ridiculiza',
            'Descalifica y no toma en serio tus comentarios',
            'Intenta anular tus decisiones',
            'Te indica como vestirte, caminar, actuar, maquillarte',
            'Te dice que estas provocativa',
            'No quiere que trabajes',
            'Te revisa el celular',
            'Te cela. Te controla. Te culpabiliza',
            'Te hace problemas si salis',
            'Controla tus amistades y/o la relacion con tu familia',
            'Destruye objetos que valorás o te pide que te deshagas de ellos',
            'Te intimida o amenaza',
            'Te trata con desprecio. Te insulta. Te ofende',
            'Te empuja. Te tironea. Te sacude. Te araña',
            'Te agarra del brazo o del pelo o del cuello',
            'Te arroja objetos',
            'Te golpea y te dice que fue "sin querer"."jugando" ',
            'Te acaricia agresivamente. Sentis que te manosea',
            'Dispone de tu dinero, tus bienes y/o tus documentos',
            'No te da plata',
            'Te aisla de tu entorno, de tus amistades',
            'No quiere usar preservativo. No deja que uses anticoncepción',
            'Sentis miedo en la calle, en tu casa o cerca de esa persona',
            'Te amenaza con dejarte sin hogar, sin bienes, sin tus hijos',
            'Amenaza con quitarte o hacerle daño a tus seres queridos',
            'Te obliga a tener relaciones sexuales o cualquier practica sexual',
            'Te golpea o agrede fisicamente',
            'Te amenaza de muerte',
            'Te amenaza con armas, cuchillos u otro objeto'
            // Agrega más preguntas si es necesario
        ];

        // Inserta datos de prueba en la tabla testviolencia
        foreach ($preguntas as $pregunta) {
            DB::table('testviolencias')->insert([
                'pregunta' => $pregunta,
            ]);
        }
    }
}
