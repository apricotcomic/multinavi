<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('contents_ja')->create('classifications', function (Blueprint $table) {
            $table->id();
            $table->string('large_classification',5);
            $table->string('large_classification_name');
            $table->string('middle_classification',5);
            $table->string('middle_classification_name');
            $table->string('small_classification',5);
            $table->string('small_classification_name');
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
        Schema::dropIfExists('classifications');
    }
}
