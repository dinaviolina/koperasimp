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
        Schema::create('penarikans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nasabah_id'); 
            $table->unsignedBigInteger('simpanan_id'); 
            $table->decimal('jumlah_penarikan', 15, 2);
            $table->enum('status_penarikan', ['ditolak', 'tervalidasi', 'belum tervalidasi'])->default('belum tervalidasi');
            $table->timestamps();
             $table->foreign('nasabah_id')->references('id')->on('nasabahs')->onDelete('cascade');
            $table->foreign('simpanan_id')->references('id')->on('simpanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penarikan');
    }
};
