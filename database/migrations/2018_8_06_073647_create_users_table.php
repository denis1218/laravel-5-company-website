<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('password',255);
            $table->string('email');
            $table->string('gender');
            $table->string('role');
            $table->string('department');
            $table->string('phone');
            $table->string('age');
            $table->string('address');
            $table->unsignedInteger('doctor_id')->nullable();

            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
