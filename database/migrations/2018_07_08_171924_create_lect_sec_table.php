<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectSecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lect_sec', function (Blueprint $table) {
            $table->string('id_lect', 8);
            $table->string('id_sub', 8);
            $table->string('id_sec', 8);
            $table->primary(['id_lect', 'id_sub', 'id_sec']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lect_sec');
    }
}
