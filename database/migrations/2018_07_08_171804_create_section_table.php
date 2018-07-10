<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->string('id', 14);
            $table->string('sub_id', 6);
            $table->string('sec_num', 2);
            $table->string('semester', 2);
            $table->string('room', 5);;
            $table->string('day', 50);
            $table->time('hour');
            $table->year('year');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section');
    }
}
