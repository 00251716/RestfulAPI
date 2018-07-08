<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudSecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_sec', function (Blueprint $table) {
            $table->string('id_stud', 8);
            $table->string('id_sub', 8);
            $table->string('id_sec', 8);
            $table->string('status', 10);
            $table->primary('id_stud', 'id_sub', 'id_sec');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stud_sec');
    }
}
