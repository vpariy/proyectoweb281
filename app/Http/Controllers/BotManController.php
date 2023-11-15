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

        $botman->hears(['¿Cómo estás?', '¿Cómo te encuentras?', 'como estas'], function (BotMan $bot) {
            $bot->reply('Estoy bien, gracias por preguntar. ¿Y tú?');
        });

        $botman->hears('Opciones', function (BotMan $bot) {
            $bot->reply('Aquí tienes algunas opciones:');
            $bot->reply('1. Opción 1');
            $bot->reply('2. Opción 2');
            $bot->reply('3. Opción 3');
        });

        $botman->hears(['.*buscar.*.*educativo.*', '.*buscar.*.*articulo.*', 'busco material informativo'], function (BotMan $bot) {
            $enlace = '<a href="/articulo" target="_blank" >articulos</a>';
            $bot->reply("Aquí tienes un enlace a : $enlace");
        });

        $botman->hears(['Denunciar', 'Realizar denuncia', 'Cómo denunciar'], function (BotMan $bot) {
            $enlace = '<a href="/denuncia/crear" target="_blank" >formulario de denuncia.</a>';
            $bot->reply('Puedes realizar una denuncia de la siguiente manera:');
            $bot->reply("1. Visita nuestro sitio web y completa el $enlace");
            $bot->reply('2. Llama a nuestra línea de denuncias al XXX-XXXX para reportar la situación.');
            $bot->reply('3. Acude personalmente a nuestras oficinas para presentar la denuncia en persona.');
        });

        $botman->hears(['¿Cuáles son los requisitos para denunciar?', 'Requisitos denuncia'], function (BotMan $bot) {
            $bot->reply('Para realizar una denuncia, necesitas los siguientes requisitos:');
            $bot->reply('1. Identificación personal (DNI, cédula, pasaporte, etc.).');
            $bot->reply('2. Detalles precisos de la situación que deseas denunciar.');
            $bot->reply('3. Cualquier evidencia o documento relevante que respalde la denuncia.');
        });

        $botman->hears(['¿Cómo puedo hacer un seguimiento a mi denuncia?', 'Seguimiento denuncia'], function (BotMan $bot) {
            $bot->reply('Puedes hacer un seguimiento a tu denuncia de las siguientes maneras:');
            $bot->reply('1. Llama a nuestra línea de atención al cliente al XXX-XXXX para obtener información sobre el estado de tu denuncia.');
            $bot->reply('2. Ingresa a nuestro sitio web e inicia sesión para consultar el estado actualizado de tu denuncia.');
            $bot->reply('3. Visita nuestras oficinas y solicita información sobre el seguimiento de tu denuncia en persona.');
        });

        $botman->hears(['¿Cómo protegen mi información durante una denuncia?', 'Seguridad denuncia'], function (BotMan $bot) {
            $bot->reply('La seguridad de tu información es una prioridad para nosotros durante el proceso de denuncia. Aquí algunas medidas que tomamos:');
            $bot->reply('1. Toda la información proporcionada se maneja de manera confidencial.');
            $bot->reply('2. Utilizamos protocolos de seguridad avanzados para proteger tus datos.');
            $bot->reply('3. Solo el personal autorizado tiene acceso a la información de la denuncia.');
        });

        $botman->hears(['Quiero saber si sufro violencia','Como saber si sufro violencia','Existe una forma de saber si sufro violencia'],function(BotMan $bot){
            $enlace = '<a href="/centrosayuda" target="_blank" >Centros de ayuda</a>';
            $test1='<a href="/testviolencia" target="_blank"> Test 1</a>';
            $test2='<a href="/test/test2" target="_blank"> Test 2</a>';
            $bot->reply('Existen varias formas de saber si se sufre violencia:');
            $bot->reply("1. Acude con una entidad que te puede ayudar en la pestaña: $enlace puedes encontrar informacion al respecto");
            $bot->reply("2. Puedes dirigirte a la pestaña de Test de violencia de nuestro sitio web y escoger entre el $test1 o el $test2");
        });

        
        $botman->hears(['.*busco.*.*leyes.*','estoy buscando leyes sobre violencia'],function(BotMan $bot){
            $enlace = '<a href="/normativa" target="_blank" >Normativas</a>';
            $bot->reply("Si estas buscando informacion sobre leyes acerca de la violencia de genero visita la pestaña de $enlace");
    
        });

        $botman->hears(['Como funcionan las alertas','como funciona el boton de alerta','para que sirve el boton de alertas','.*funcion.*.*alerta.*'],function(BotMan $bot){
           
            $bot->reply('El boton de alerta esta diseñado ');
            $bot->reply('para que los usuarios registrados en nuestro sitio web');
            $bot->reply('puedan presionarlo al sufrir un caso grave de violencia,');
            $bot->reply('nosotros recibiremos la ubicacion donde se esta cometiendo el acto de violencia');
            $bot->reply('e informaremos a las autoridades correspondientes');

        });

        $botman->fallback(function (BotMan $bot) {
            $bot->reply('Lo siento, no entendí eso. ¿Puedes reformular tu pregunta?');
        });

        $botman->listen();
    }
}
