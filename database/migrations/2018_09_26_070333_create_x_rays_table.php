<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXRaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_rays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tooth_number');
            $table->longText('description');
            $table->boolean('status_xray');
            $table->boolean('status_pay')->nullable();
            $table->unsignedInteger('treatment_id')->nullable();

            $table->timestamps();

            $table->foreign('treatment_id')
                ->references('id')->on('treatments')
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
        Schema::dropIfExists('x_rays');
    }
}
