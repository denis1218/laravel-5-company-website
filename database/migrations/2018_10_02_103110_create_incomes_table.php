<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estimated_fee')->nullable();
            $table->integer('amount');
            $table->integer('discount')->nullable();
            $table->integer('remaining')->nullable();
            $table->string('status_pay')->nullable();
            $table->longText('description')->nullable();
            $table->string('category');
            $table->string('purpose')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('treatment_id')->nullable();
            $table->unsignedInteger('xray_id')->nullable();

            $table->foreign('treatment_id')
                ->references('id')->on('treatments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('xray_id')
                ->references('id')->on('x_rays')
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
        Schema::dropIfExists('incomes');
    }
}
