<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('contents_ja')
            ->create('shop_coordinates', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('shop_coordinate_id');
                $table->bigInteger('landmark_coordinate_id');
                $table->bigInteger('floor_coordinate_id');
                $table->float('x1_coordinate');
                $table->float('x2_coordinate');
                $table->float('y1_coordinate');
                $table->float('y2_coordinate');
                $table->integer('x_point_coordinate');
                $table->integer('y_point_coordinate');
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
        Schema::dropIfExists('shop_coordinates');
    }
}
