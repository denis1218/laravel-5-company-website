<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xrays', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('tooth_number');
            $table->string('patient_name');
            $table->string('doctor_name')->nullable();
            $table->integer('paid_amount')->nullable();
            $table->string('xray_status')->nullable();
            $table->date('created_at');
            $table->unsignedInteger('patient_id')->nullable();

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
        Schema::dropIfExists('xrays');
    }
}
