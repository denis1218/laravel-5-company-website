<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kind');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('total_price');
            $table->string('description')->nullable();
            $table->string('bill_number')->nullable();
            $table->integer('trader_id')->unsigned();
            $table->timestamps();
            $table->foreign('trader_id')
                  ->references('id')->on('traders')
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
        Schema::dropIfExists('items');
    }
}
