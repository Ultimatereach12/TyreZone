<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArrangePickupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrange_pickup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('date_time');
            $table->string('loc_lat');
            $table->string('loc_long');
            $table->integer('is_emergency');
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
        Schema::dropIfExists('arrange_pickup');
    }
}
