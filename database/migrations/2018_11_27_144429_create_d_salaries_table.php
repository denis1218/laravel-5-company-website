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
            $table->integer('paid_amount');
            $table->unsignedInteger('doc_id');
            $table->date('start');
            $table->date('end');
            $table->date('date');
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
