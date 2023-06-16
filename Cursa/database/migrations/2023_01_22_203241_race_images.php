<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_images', function (Blueprint $table) {
            $table->integer('race_id')->unsigned();
            $table->string('race_image', 255);
            $table->foreign('race_id')->references('id')->on('races');
            $table->primary(array('race_image','race_id'));
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
        Schema::dropIfExists('raceImages');
    }
};
