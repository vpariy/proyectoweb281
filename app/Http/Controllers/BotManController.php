<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
class BotManController extends Controller
{
    public function handle(Request $request)
    {
        $botman = app('botman');

        $botman->hears(['Hola', 'Hola BotMan', 'Saludos', '¡Hola!'], function (BotMan $bot) {
            $respuestas = [
                '¡Hola! ¿Cómo puedo ayudarte hoy?',
                'Hola, ¿en qué puedo ayudarte?',
                'Saludos. ¿Cómo puedo asistirte?',
            ];

            $bot->reply($respuestas[array_rand($respuestas)]);
        });

        $botman->hears(['¿Cómo estás?', '¿Cómo te encuentras?','como estas'], function (BotMan $bot) {
            $bot->reply('Estoy bien, gracias por preguntar. ¿Y tú?');
        });

        $botman->hears('Opciones', function (BotMan $bot) {
            $bot->reply('Aquí tienes algunas opciones:');
            $bot->reply('1. Opción 1');
            $bot->reply('2. Opción 2');
            $bot->reply('3. Opción 3');
        });

        $botman->hears(['.*educativo.*','.*articulo.*','busco material informativo'], function (BotMan $bot) {
            $enlace = '<a href="/articulo" target="_blank" >articulos</a>';
            $bot->reply("Aquí tienes un enlace a : $enlace");
        });
        

        $botman->fallback(function (BotMan $bot) {
            $bot->reply('Lo siento, no entendí eso. ¿Puedes reformular tu pregunta?');
        });

        $botman->listen();
    }
}
