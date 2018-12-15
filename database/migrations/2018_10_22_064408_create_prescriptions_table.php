<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicine_name')->nullable();
            $table->string('unit')->nullable();
            $table->string('sale')->nullable();
            $table->integer('total_fee')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
