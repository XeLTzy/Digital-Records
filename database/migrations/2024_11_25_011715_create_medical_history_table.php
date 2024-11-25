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
        Schema::create('medical_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking')->cascadeOnUpdate()->cascadeOnDelete()->nullable(); // Other columns...
            $table->boolean('heart_disease')->default(false)->nullable(); // nullable
            $table->string('heart_disease_reason')->nullable(); // nullable
            $table->boolean('high_blood')->default(false)->nullable(); // nullable
            $table->string('high_blood_reason')->nullable(); // nullable
            $table->boolean('low_blood')->default(false)->nullable(); // nullable
            $table->string('low_blood_reason')->nullable(); // nullable
            $table->boolean('stroke')->default(false)->nullable(); // nullable
            $table->string('stroke_reason')->nullable(); // nullable
            $table->boolean('diabetic')->default(false)->nullable(); // nullable
            $table->string('diabetic_reason')->nullable(); // nullable
            $table->boolean('asthma')->default(false)->nullable(); // nullable
            $table->string('asthma_reason')->nullable(); // nullable
            $table->boolean('std_hiv_aids_covid19')->default(false)->nullable(); // nullable
            $table->string('std_hiv_aids_covid19_reason')->nullable(); // nullable
            $table->boolean('lung_disease')->default(false)->nullable(); // nullable
            $table->string('lung_disease_reason')->nullable(); // nullable
            $table->boolean('liver_disease')->default(false)->nullable(); // nullable
            $table->string('liver_disease_reason')->nullable(); // nullable
            $table->boolean('stomach_ulcer_gerd')->default(false)->nullable(); // nullable
            $table->string('stomach_ulcer_gerd_reason')->nullable(); // nullable
            $table->boolean('pregnant')->default(false)->nullable(); // nullable
            $table->string('pregnant_reason')->nullable(); // nullable
            $table->boolean('oncontraceptives')->default(false)->nullable(); // nullable
            $table->string('oncontraceptives_reason')->nullable(); // nullable
            $table->boolean('alergies')->default(false)->nullable(); // nullable
            $table->string('alergies_reason')->nullable(); // nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_history');
    }
};
