<?php

use Illuminate\Database\Seeder;
use App\Student;
use Illuminate\Support\Facades\Hash;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'carnet' => '00109414',
            'full_name' => 'Vanesa Elizabeth Aguilar López',
            'status' => 1,
            'password' => Hash::make('00109414')
        ]);
        Student::create([
            'carnet' => '00010216',
            'full_name' => 'Karla Lissette Cruz Mendoza',
            'status' => 1,
            'password' => Hash::make('00010216')
        ]);
        Student::create([
            'carnet' => '00215316',
            'full_name' => 'Emerson Gamaliel Nolasco Cornejo',
            'status' => 1,
            'password' => Hash::make('00215316')
        ]);
        Student::create([
            'carnet' => '00251716',
            'full_name' => 'Kevin Alexander López Aquino',
            'status' => 1,
            'password' => Hash::make('00251716')
        ]);
        Student::create([
            'carnet' => '00018616',
            'full_name' => 'Kevin Enmanuel López Velásquez',
            'status' => 1,
            'password' => Hash::make('00018616')
        ]);
    }
}
