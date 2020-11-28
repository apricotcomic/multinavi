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
            $table->float('x1_coordinate');
            $table->float('x2_coordinate');
            $table->float('y1_coordinate');
            $table->float('y2_coordinate');
            $table->string('database');
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
        Schema::connection('location')->dropIfExists('landmark_coordinates');
    }
}
