<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaySalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paid_amount');
            $table->unsignedInteger('emp_id')->nullable();
            $table->date('created_at');

            $table->foreign('emp_id')
                ->references('id')->on('employees')
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
        Schema::dropIfExists('pay_salaries');
    }
}
