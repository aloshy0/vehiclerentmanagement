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
      Schema::create('vehicles', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('model');
        $table->string('number_plate')->unique();
        $table->decimal('rent_per_day', 8, 2);
        $table->enum('status', ['available', 'rented'])->default('available');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
