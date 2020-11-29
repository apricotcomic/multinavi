<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('contents_ja')->create('item_data', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('large_classification',5);
            $table->string('middle_classification',5);
            $table->string('small_classification',5);
            $table->string('about');
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
        Schema::dropIfExists('item_data');
    }
}
