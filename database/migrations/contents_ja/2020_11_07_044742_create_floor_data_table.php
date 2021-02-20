<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('contents_ja')->create('floor_data', function (Blueprint $table) {
            $table->id();
            $table->string('db_key', 16);
            $table->bigInteger('landmark_id');
            $table->bigInteger('floor_coordinate_id');
            $table->string('floor_name');
            $table->string('floor_mapfile');
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
        Schema::dropIfExists('floor_data');
    }
}
