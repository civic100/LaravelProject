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
        Schema::create('runners', function (Blueprint $table) {
            $table->string('dni',9);
            $table->string('name');
            $table->enum('sex',['male','female']);
            $table->string('address');
            $table->date('birth_date');
            $table->enum('federation',['0','1']);
            $table->integer('num_federation')->nullable();
            $table->timestamps();
            $table->primary('dni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runners');
    }
};
