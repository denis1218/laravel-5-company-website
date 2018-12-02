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
            $table->string('treatment')->nullable();
            $table->longText('teeth_number')->nullable();
            $table->string('dentaldefect')->nullable();
            $table->string('shade')->nullable();
            $table->string('type_cover')->nullable();
            $table->string('type_prosthesis')->nullable();
            $table->integer('visits')->nullable();
            $table->string('status_visits');
            $table->boolean('status_pay');
            $table->longText('description')->nullable();
            $table->string('type_treatment')->nullable();
            $table->string('have_xray')->nullable();
            $table->integer('estimated_fee');
            $table->integer('paid_amount')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('remaining_fee')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->date('created_at');

            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('treatments');
    }
}
