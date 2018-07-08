<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_subject', function (Blueprint $table) {
            $table->string('id_major', 8);
            $table->string('id_plan', 8);
            $table->string('id_sub', 8);
            $table->integer('level');
            $table->primary(['id_major', 'id_plan', 'id_sub']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_subject');
    }
}
