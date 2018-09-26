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
<<<<<<< HEAD:database/migrations/2018_09_24_054735_create_doctors_table.php
            $table->integer('age');
            $table->time('start_work_time');
            $table->time('end_work_time');
=======
            $table->time('start_work_time')->nullable();
            $table->time('end_work_time')->nullable();
>>>>>>> d2a4713b56ee8e37869b91b5a926b924e69c5041:database/migrations/2018_09_23_154745_create_doctors_table.php
            $table->string('phone');
            $table->string('dept_id');
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
