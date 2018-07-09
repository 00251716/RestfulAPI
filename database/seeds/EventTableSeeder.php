<?php

use Illuminate\Database\Seeder;
use App\Event;
use Carbon\Carbon;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Período de evaluaciones',
            'date' =>  Carbon::create(2018, 7, 10),
            'description' => 'Finaliza período de evaluaciones',
            'type' => 0,
        ]);
        Event::create([
            'title' => 'Notas finales',
            'date' =>  Carbon::create(2018, 7, 13),
            'description' => 'Último día para que los catedráticos carguen notas finales y cierren asignaturas del Ciclo 01/2018',
            'type' => 0,
        ]);
        Event::create([
            'title' => 'Ciclo 02/2018: Preinscripción',
            'date' =>  Carbon::create(2018, 7, 19),
            'description' => 'Desde las 8:30 a.m. del jueves 19 de julio hasta las 6 p.m. del lunes 23 de julio, en el SIM, según programación.',
            'type' => 0,
        ]);
        Event::create([
            'title' => 'Foro: Hacia la construcción de la legislación con participación social, técnica y política',
            'date' =>  Carbon::create(2018, 5, 5),
            'description' => '• Auditorio Elba y Celina Ramos.',
            'type' => 0,
        ]);
        Event::create([
            'title' => 'Programas en radio: Polo Tierra',
            'date' =>  Carbon::create(2018, 5, 6),
            'description' => '“Colectivo de Memoria Histórica de la UCA”. 5 pm. YSUCA (91.7 FM)',
            'type' => 0,
        ]);
    }
}
