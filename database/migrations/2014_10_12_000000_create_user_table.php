<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('name');
            $table->bigInteger('mobile');
            $table->string('email');
            $table->string('password');
            $table->longText('address');
            $table->longText('otp')->nullable();
            $table->longText('verified');
            $table->longText('user_type');
            $table->integer('alive');
            $table->string('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_user');
    }
}
