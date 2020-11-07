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
        Schema::connection('contents')->create('floor_coordinates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landmark_id');
            $table->double('x1_coordinate');
            $table->double('x2_coordinate');
            $table->double('y1_coordinate');
            $table->double('y2_coordinate');
            $table->double('z_coordinate');
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
