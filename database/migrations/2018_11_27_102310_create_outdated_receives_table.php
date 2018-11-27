<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutdatedReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outdated_receives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paid');
            $table->unsignedInteger('outdated_id')->nullable();

            $table->foreign('outdated_id')
                ->references('id')->on('outdated_patients')
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
        Schema::dropIfExists('outdated_receives');
    }
}
