<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('location')->create('floor_coordinates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landmark_coordinate_id');
            $table->float('x1_coordinate');
            $table->float('x2_coordinate');
            $table->float('y1_coordinate');
            $table->float('y2_coordinate');
            $table->float('z_coordinate');
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
        Schema::dropIfExists('floor_coordinates');
    }
}
