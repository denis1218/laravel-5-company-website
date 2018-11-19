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
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone');
            $table->longText('address')->nullable();
            $table->longText('problem_health')->nullable();
            $table->longText('job')->nullable();
            $table->longText('education')->nullable();
            $table->string('status');
            $table->date('next_appointment');
            $table->integer('time')->nullable();
            $table->string('meridiem')->nullable();
            $table->unsignedInteger('doctor_id');
            $table->timestamps();
            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->softDeletes();
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
