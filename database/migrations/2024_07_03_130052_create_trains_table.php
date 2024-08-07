<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('agency');
            $table->string('arrival_station');
            $table->string('departure_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('train_Code');
            $table->integer('number_of_carriages');
            $table->string('in_time');
            $table->string('deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
