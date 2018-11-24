<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutdatedPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outdated_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('bill_number')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_register')->nullabl();
            $table->longText('treatment')->nullabl();
            $table->integer('fee')->nullabl();
            $table->integer('paid')->nullabl();
            $table->integer('remaining');

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
        Schema::dropIfExists('outdated_patients');
    }
}
