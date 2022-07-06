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
        Schema::create('debits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('association_id');
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
            $table->unsignedBigInteger('associate_id');
            $table->foreign('associate_id')->references('id')->on('associates')->onDelete('cascade');
            $table->enum('type',['open','exit']);
            $table->string('amount');
            $table->text('description');

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
        Schema::dropIfExists('debits');
    }
};
