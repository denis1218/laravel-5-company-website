<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrthodensiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orthodensies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->unsignedInteger('treatment_id');
            $table->unsignedInteger('patient_id');
            $table->foreign('treatment_id')
            ->references('id')->on('treatments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('orthodensies');
    }
}
