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
            $table->unsignedInteger('FK_id_Doctor')->nullable();
            $table->integer('FK_id_X-Ray')->nullable();
            $table->integer('FK_id_X-Payment')->nullable();
            $table->integer('FK_id_X-Treatment')->nullable();
            $table->timestamps();

            $table->foreign('FK_id_Doctor')
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
