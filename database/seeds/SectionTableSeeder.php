<?php

use Illuminate\Database\Seeder;
use App\Section;
use Carbon\Carbon;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'id' => '20180101010141',
            'sub_id' => '010141',
            'sec_num' => '01',
            'semester' => '01',
            'year' => Carbon::create(2018),
            'room' => 'A-32',
            'day' => 'lunes;miércoles',
            'hour' => Carbon::createFromTime(15,30)
        ]);
        Section::create([
            'id' => '20180101110022',
            'sub_id' => '110022',
            'sec_num' => '01',
            'semester' => '01',
            'year' => Carbon::create(2018),
            'room' => 'A-23',
            'day' => 'lunes;miércoles',
            'hour' => Carbon::createFromTime(9)
        ]);
        Section::create([
            'id' => '20180101190159',
            'sub_id' => '190159',
            'sec_num' => '01',
            'semester' => '01',
            'year' => Carbon::create(2018),
            'room' => 'A-33',
            'day' => 'martes;jueves',
            'hour' => Carbon::createFromTime(7)
        ]);
        Section::create([
            'id' => '20180101190158',
            'sub_id' => '190158',
            'sec_num' => '01',
            'semester' => '01',
            'year' => Carbon::create(2018),
            'room' => 'A-23',
            'day' => 'martes;jueves',
            'hour' => Carbon::createFromTime(9)
        ]);
        Section::create([
            'id' => '20180101190160',
            'sub_id' => '190160',
            'sec_num' => '01',
            'semester' => '01',
            'year' => Carbon::create(2018),
            'room' => 'I-23',
            'day' => 'martes;jueves',
            'hour' => Carbon::createFromTime(13,30)
        ]);
    }
}
