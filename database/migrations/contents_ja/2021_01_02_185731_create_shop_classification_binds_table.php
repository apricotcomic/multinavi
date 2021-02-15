<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopClassificationBindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_classification_binds', function (Blueprint $table) {
            $table->id();
            $table->string('db_key',16);
            $table->bigInteger('shop_id');
            $table->string('large_classification',5);
            $table->string('middle_classification',5);
            $table->string('small_classification',5);
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
        Schema::dropIfExists('shop_classification_binds');
    }
}
