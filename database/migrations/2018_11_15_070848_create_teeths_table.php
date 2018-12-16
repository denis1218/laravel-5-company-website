<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeethsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teeths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tooth_number')->nullable();
            $table->string('treatment')->nullable();
            $table->string('dentaldefect')->nullable();
            $table->string('shade')->nullable();
            $table->string('type_cover')->nullable();
            $table->integer('patient_id')->nullable();
            $table->unsignedInteger('treatment_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teeths');
    }
}
