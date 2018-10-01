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
            $table->integer('visits');
            $table->date('next_appointment')->nullable();
            $table->string('meridiem')->nullable();
            $table->string('status_visits');
            $table->boolean('status_pay');
            $table->longText('description')->nullable();
            $table->boolean('have_xray');
            $table->integer('discount');
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('dentalDefect_id')->nullable();
            $table->unsignedInteger('treatment_id')->nullable();
            $table->timestamps();


            $table->foreign('treatment_id')
                ->references('id')->on('treatment_lists')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('dentalDefect_id')
                ->references('id')->on('dental_defect_lists')
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
