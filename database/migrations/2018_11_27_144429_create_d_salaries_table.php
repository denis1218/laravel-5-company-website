<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paid_amount')->nullable();
            $table->unsignedInteger('doc_id')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('date')->nullable();
            $table->foreign('doc_id')
                ->references('id')->on('doctors')
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
        Schema::dropIfExists('d_salaries');
    }
}
