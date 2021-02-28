<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorShopBindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_shop_binds', function (Blueprint $table) {
            $table->id();
            $table->string('db_key', 16);
            $table->bigInteger('landmark_coordinate_id');
            $table->bigInteger('floor_coordinate_id');
            $table->bigInteger('shop_data_id');
            $table->float('x_coordinate');
            $table->float('y_coordinate');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('floor_shop_binds');
    }
}
