<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('event')->insert([
          'id' => '1',
          'title' => 'Período de evaluaciones',
          'date' =>  '10/05/18',
          'description' => 'Finaliza período de evaluaciones',
          'type' => 0,
      ]);

      DB::table('event')->insert([
          'id' => '2',
          'title' => 'Notas finales',
          'date' =>  '13/05/18',
          'description' => 'Último día para que los catedráticos carguen notas finales y cierren asignaturas del Ciclo 01/2018',
          'type' => 0,
      ]);

      DB::table('event')->insert([
          'id' => '3',
          'title' => 'Ciclo 02/2018: Preinscripción',
          'date' =>  '19/05/18',
          'description' => 'Desde las 8:30 a.m. del jueves 19 de julio hasta las 6 p.m. del lunes 23 de julio, en el SIM, según programación.',
          'type' => 0,
      ]);

      DB::table('event')->insert([
          'id' => '4',
          'title' => 'Foro: Hacia la construcción de la legislación con participación social, técnica y política',
          'date' =>  '05/05/18',
          'description' => '• Auditorio Elba y Celina Ramos.',
          'type' => 0,
      ]);

      DB::table('event')->insert([
          'id' => '5',
          'title' => 'Programas en radio: Polo Tierra',
          'date' =>  '06/05/18',
          'description' => '“Colectivo de Memoria Histórica de la UCA”. 5 pm. YSUCA (91.7 FM)',
          'type' => 0,
      ]);

    }
}
