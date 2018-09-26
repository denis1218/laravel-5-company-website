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
            $table->string('dental_defect');
            $table->string('treatment');
            $table->integer('visits');
            $table->date('next_appointment');
            $table->string('status_visits');
            $table->boolean('status_pay');
            $table->longText('description');
            $table->boolean('have-xray');
            $table->unsignedInteger('FK_id_patient')->nullable();
            $table->timestamps();

            $table->foreign('FK_id_patient')
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
