<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_test', function (Blueprint $table) {
            $table->string('id_sub', 8);
            $table->string('id_sec', 8);
            $table->string('id_exam', 8);
            $table->primary(['id_sub', 'id_sec', 'id_exam']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_test');
    }
}
