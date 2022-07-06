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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fatherlastname');
            $table->string('motherlastname');
            $table->string('dni');
            $table->string('birtdate');
            $table->string('maricalstaus');
            $table->string('sexo');
            $table->string('phone');
            $table->string('email');
            $table->string('address');




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
        Schema::dropIfExists('people');
    }
};
