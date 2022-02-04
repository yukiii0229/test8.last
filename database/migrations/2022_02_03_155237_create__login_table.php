<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_login', function (Blueprint $table) {
            $table->string('sesstion',64);
            $table->bigIncrements('users_id');
            $table->timestamp('expiration')->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->foreign('user_id')->references('user_id')->on('employee');
            $table->primary(['sesstion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_login');
    }
}
