<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class NormativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         

        DB::table('leyes')->insert([
            'titulo' => 'Ley Nº 263 de 31 de julio de 2012, Ley integral contra la trata y tráfico de personas' ,
            'descripcion' =>'Garantiza los derechos fundamentales de las víctimas a través de la consolidación de medidas y mecanismos de prevención, protección, atención, persecución y sanción penal de estos delitos.',
        ]); 

        DB::table('leyes')->insert([
            'titulo' =>'Ley Nº 243 de 28 de mayo de 2012, Ley contra el acoso y violencia política hacia las mujeres' ,
            'descripcion' =>'Elimina actos, conductas y manifestaciones individuales o colectivas de acoso y violencia que afecta de manera directa o indirecta a las mujeres en el ejercicio de sus funciones políticos y públicas.',
        ]); 

        DB::table('leyes')->insert([
            'titulo' =>'Ley 2.033 de protección a las víctimas de delitos contra la libertad sexual' ,
            'descripcion' =>'Define y amplía la pena para los delitos de violación, estupro, corrupción de menores y proxenetismo. Además del acceso vaginal, considera violación al acceso anal y oral y prevé la atención multidisciplinaria de la víctima',
        ]);

       
        DB::table('leyes')->insert([
            'titulo' => 'Ley N°1173, de abreviación procesal penal y de fortalecimiento de la lucha integral contra la violencia a niñas, niños, adolescentes y mujeres' ,
            'descripcion' =>'La presente Ley tiene por objeto procurar la pronta y  oportuna resolución de los conflictos penals, adoptando al efecto, medidas indispensables para profundizar la oraldad, fortalecer la lucha contra la violencia a niñas, niños, adolescentes y mujeres, evitar el retardo procesal y el abuso de la detención preventiva y posibilitar la efectiva luida judicial de las víctimas, mediante la modificación de la Ley N° 1970 de 25 de marzo de 1999, "Código de Procedimiento Penal", y disposiciones conexas.',
        ]);


        DB::table('leyes')->insert([
            'titulo' => 'Ley 348 Integral para garantizar a las mujeres una vida libre de violencia', 
            'descripcion' => 'La presente Ley tiene por objeto establecer mecanismos, medidas y políticas integrales de prevención, atención, protección y reparación a las mujeres en situación de violencia, así como la persecución y sanción a los agresores, con el fin de garantizar a las mujeres una vida digna y el ejercicio pleno de sus derechos para Vivir Bien. Incorpora entre otros el femicidio en el Código penal, Art. 7 párrafo N°2.',
        ]);
  
        

    }
}
