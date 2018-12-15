<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOincomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oincoms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from_whom');
            $table->integer('amount')->nullable();
            $table->string('purpose')->nullable();
            $table->longText('description');
            $table->date('created_at');
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
        Schema::dropIfExists('oincoms');
    }
}
