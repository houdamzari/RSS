<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaVieEcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('la_vie_ecos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('image')->nullable();
            $table->longText('desc');
            $table->longText('smalldesc');
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
        Schema::dropIfExists('la_vie_ecos');
    }
}
