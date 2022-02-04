<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brake', function (Blueprint $table) {
            $table->date('date');
            $table->bigIncrements('users_id');
            $table->integer('number');
            $table->timestamp('brake_in')->nullable();
            $table->timestamp('brake_out');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->primary(['date','users_id','number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brake');
    }
}
