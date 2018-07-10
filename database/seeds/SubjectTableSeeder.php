<?php

use Illuminate\Database\Seeder;
use App\Subject;
use Carbon\Carbon;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'id' => '010141',
            'name' => 'Análisis Numérico',
            'uvs' => 4
        ]);
        Subject::create([
            'id' => '110022',
            'name' => 'Medios de Comunicación Social',
            'uvs' => 4
        ]);
        Subject::create([
            'id' => '190159',
            'name' => 'Programación de Dispositivos Móviles',
            'uvs' => 4
        ]);
        Subject::create([
            'id' => '190158',
            'name' => 'Redes de Computadoras',
            'uvs' => 4
        ]);
        Subject::create([
            'id' => '190160',
            'name' => 'Análisis de Sistemas',
            'uvs' => 3
        ]);
    }
}
