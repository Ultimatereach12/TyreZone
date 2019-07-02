<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('package_type');
            $table->string('used_pack');
            $table->string('left_pack');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('last_served');
            $table->string('shop_id');
            $table->integer('days_to alive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_package');
    }
}
