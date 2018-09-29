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
            $table->unsignedInteger('FK_id_patient')->nullable();
            $table->unsignedInteger('FK_id_treatment')->nullable();
            $table->unsignedInteger('FK_id_dentalDefect')->nullable();
            $table->timestamps();

            $table->foreign('FK_id_patient')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('FK_id_treatment')
                ->references('id')->on('treatment_lists')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('FK_id_dentalDefect')
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
