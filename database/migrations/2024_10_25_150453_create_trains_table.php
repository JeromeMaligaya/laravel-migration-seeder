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
            $table->bigIncrements('id');
            $table->string('company', 150);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->unsignedTinyInteger('number_of_carriages');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
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
