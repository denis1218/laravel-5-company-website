<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('teeth_number');
            $table->string('treatment');
            $table->string('dentaldefect');
            $table->integer('visits');
            $table->date('next_appointment')->nullable();
            $table->string('meridiem')->nullable();
            $table->string('status_visits');
            $table->boolean('status_pay');
            $table->longText('description')->nullable();
            $table->boolean('have_xray');
            $table->integer('estimated_fee');
            $table->integer('discount');
            $table->unsignedInteger('patient_id')->nullable();

            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')->on('patients')
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
        Schema::dropIfExists('treatments');
    }
}
