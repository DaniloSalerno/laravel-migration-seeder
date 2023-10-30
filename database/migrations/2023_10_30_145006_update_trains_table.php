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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 25);
            $table->string('start_station', 30);
            $table->string('arrive_station', 30);
            $table->dateTime('start_time');
            $table->dateTime('arrive_time');
            $table->string('train_code', 6);
            $table->tinyInteger('carriage_number')->unsigned()->nullable();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};
