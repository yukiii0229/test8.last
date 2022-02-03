<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('user_id');
            $table->date('date')->useCurrent()->nullable();
            $table->timestamp('start_time')->useCurrent()->nullable();
            $table->timestamp('end_time')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->primary(['date','users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work');
    }
}
