<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandmarkCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('location')->create('landmark_coordinates', function (Blueprint $table) {
            $table->id();
            $table->double('x1_coordinate');
            $table->double('x2_coordinate');
            $table->double('y1_coordinate');
            $table->double('y2_coordinate');
            $table->string('database');
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
        Schema::dropIfExists('landmark_coordinates');
    }
}
