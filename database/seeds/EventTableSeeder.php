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
          'title' => 'Calendario académico',
          'date' => ,
          'description' => '',
          'type' => ,
      ], [

      ]);
    }
}
