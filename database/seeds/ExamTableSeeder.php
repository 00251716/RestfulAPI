<?php

use Illuminate\Database\Seeder;
use App\Exam;
use Carbon\Carbon;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::create([
            'description'=> 'Primera evaluación parcial',
            'percentage' => 15.0,
            'date' => Carbon::create(2018, 4, 18),
            'section_id' => '20180101010141'
        ]);
        Exam::create([
            'description'=> 'Segunda evaluación parcial',
            'percentage' => 20.0,
            'date' => Carbon::create(2018, 5, 23),
            'section_id' => '20180101010141'
        ]);
        Exam::create([
            'description'=> 'Evaluación final',
            'percentage' => 20.0,
            'date' => Carbon::create(2018, 7, 6),
            'section_id' => '20180101010141'
        ]);
        Exam::create([
            'description'=> 'Proyecto',
            'percentage' => 25.0,
            'date' => Carbon::create(2018, 6, 22),
            'section_id' => '20180101010141'
        ]);
        Exam::create([
            'description'=> 'Promedio de Tareas',
            'percentage' => 10.0,
            'date' => Carbon::create(2018, 6, 29),
            'section_id' => '20180101010141'
        ]);
        Exam::create([
            'description'=> 'Laboratorios',
            'percentage' => 10.0,
            'date' => Carbon::create(2018, 6, 22),
            'section_id' => '20180101010141'
        ]);
    }
}
