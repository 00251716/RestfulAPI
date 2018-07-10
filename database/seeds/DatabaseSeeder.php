<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
         $this->call('EventTableSeeder');
         $this->call('StudentTableSeeder');
         $this->call('SubjectTableSeeder');
         $this->call('SectionTableSeeder');
         $this->call('ExamTableSeeder');
    }
}
