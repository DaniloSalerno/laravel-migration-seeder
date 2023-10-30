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
            $table->string('company', 25);
            $table->string('start_station', 30);
            $table->string('arrive_station', 30);
            $table->time('start_time');
            $table->time('arrive_time');
            $table->string('train_code', 6);
            $table->tinyInteger('carriage_number')->unsigned()->nullable();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);
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
