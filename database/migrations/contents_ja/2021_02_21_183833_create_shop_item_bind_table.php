<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopItemBindTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_item_bind', function (Blueprint $table) {
            $table->id();
            $table->string('db_key', 16);
            $table->bigInteger('landmark_coordinate_id');
            $table->bigInteger('floor_coordinate_id');
            $table->bigInteger('shop_data');
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
        Schema::dropIfExists('shop_item_bind');
    }
}
