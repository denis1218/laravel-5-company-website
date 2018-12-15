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
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->integer('age')->nullable();
            $table->time('start_work_time')->nullable();
            $table->time('end_work_time')->nullable();
            $table->string('phone')->nullable();
            $table->string('department')->nullable();
            $table->string('gender')->nullable();
            $table->integer('salary_amount')->nullable();
            $table->integer('max_patient')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('doctors');
    }
}
