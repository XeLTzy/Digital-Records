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
        Schema::create('avail_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->nullable()->constrained('booking')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('service_id')->nullable()->constrained('services')->cascadeOnDelete();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avail_services');
    }
};
