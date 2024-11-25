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
        Schema::create('health_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking')->cascadeOnUpdate()->cascadeOnDelete()->nullable(); // Other columns...
            $table->boolean('Cough')->default(false)->nullable(); // nullable
            $table->boolean('Sipon')->default(false)->nullable(); // nullable
            $table->boolean('Fever')->default(false)->nullable(); // nullable
            $table->boolean('Flu')->default(false)->nullable(); // nullable
            $table->boolean('WeakenBody')->default(false)->nullable(); // nullable
            $table->boolean('BodyShaking')->default(false)->nullable(); // nullable
            $table->boolean('JointPain')->default(false)->nullable(); // nullable
            $table->boolean('SwollenThroat')->default(false)->nullable(); // nullable
            $table->boolean('NoneTaste_Smell')->default(false)->nullable(); // nullable
            $table->boolean('FrequentHeadaches')->default(false)->nullable(); // nullable
            $table->boolean('DifficultyBreathing')->default(false)->nullable(); // nullable
            $table->string('MedicationsForConditions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_status');
    }
};
