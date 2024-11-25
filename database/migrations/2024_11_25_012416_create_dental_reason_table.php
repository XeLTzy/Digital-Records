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
        Schema::create('dental_reason', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking')->cascadeOnUpdate()->cascadeOnDelete()->nullable(); // Other columns...
            $table->string('reason')->nullable();
            $table->string('medication')->nullable();
            $table->date('DamageStarted')->nullable();
            $table->string('otherinformation')->nullable();
            $table->boolean('sumasakit')->default(false)->nullable(); // nullable
            $table->boolean('nangingilo')->default(false)->nullable(); // nullable
            $table->boolean('smoker')->default(false)->nullable(); // nullable
            $table->boolean('BleedingGums')->default(false)->nullable(); // nullable
            $table->boolean('BleedingHistory')->default(false)->nullable(); // nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_reason');
    }
};
