<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodaysModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todays_models', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('image')->nullable();
            $table->string('desc')->nullable()->length(12550);
            $table->string('smalldesc')->nullable()->length(1000);
            $table->string('date');
            $table->string('link');
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
        Schema::dropIfExists('todays_models');
    }
}
