<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_patient');
            $table->string('name');
            $table->string('lastname');
            $table->string('gender');
            $table->integer('age');
            $table->string('phone');
            $table->longText('address');
            $table->longText('problem_health');
            $table->string('status');
            $table->unsignedInteger('doctor_id')->nullable();
//            $table->integer('x_ray_id')->nullable();
//            $table->integer('x_ray_paid_id')->nullable();
//            $table->integer('x_treatment_id')->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
