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
        Schema::create('racetrack_records', function (Blueprint $table) {
            $table->integer('race_id')->unsigned();
            $table->string('runner_dni',9);
            $table->string('insurer_cif')->nullable();
            $table->string('qr');
            $table->integer('dorsal');
            $table->time('time')->nullable();
            $table->integer('points')->nullable();
            $table->foreign('runner_dni')->references('dni')->on('runners');
            $table->foreign('insurer_cif')->references('cif')->on('insurers');
            $table->foreign('race_id')->references('id')->on('races');
            $table->primary(array('runner_dni','qr','race_id'));
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
        Schema::dropIfExists('racetrack_records');
    }
};
