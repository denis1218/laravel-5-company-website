<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeethsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teeths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tooth_number');
            $table->unsignedInteger('treatment_id')->nullable();

            $table->foreign('treatment_id')
                ->references('id')->on('treatments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('teeths');
    }
}
