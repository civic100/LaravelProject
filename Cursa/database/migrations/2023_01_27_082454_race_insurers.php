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
        Schema::create('race_insurers', function (Blueprint $table) {
            $table->integer('race_id')->unsigned();
            $table->string('insurer_cif');
            $table->float('price');
            $table->foreign('insurer_cif')->references('cif')->on('insurers');
            $table->foreign('race_id')->references('id')->on('races');
            $table->primary(array('insurer_cif','race_id'));
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
        Schema::dropIfExists('race_insurers');
    }
};
