<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandmarkDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('location')->create('landmark_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('landmark_id');
            $table->string('landmark_name');
            $table->string('address');
            $table->string('zip');
            $table->string('telephone_number');
            $table->string('fax_number');
            $table->string('email');
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
        Schema::connection('location')->dropIfExists('landmark_data');
    }
}
