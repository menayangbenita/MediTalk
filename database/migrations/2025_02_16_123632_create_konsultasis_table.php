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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('pasien_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('transaksi_id')->constrained('transaksi')->onDelete('cascade');
            $table->enum('status', ['ongoing', 'completed', 'canceled']);
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};
