<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->integer('age');
<<<<<<< HEAD
            $table->time('start_work_time')->nullable();
            $table->time('end_work_time')->nullable();
=======
            $table->string('start_work_time');
            $table->string('end_work_time');
>>>>>>> 04a8d3c39c12e2c5bb6848b695fd79ba1b0b8f66
            $table->string('phone');
            $table->string('department');
            $table->string('gender');
            $table->string('salary_type');
            $table->integer('salary_amount');
            $table->integer('max_patient');
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
        Schema::dropIfExists('doctors');
    }
}
