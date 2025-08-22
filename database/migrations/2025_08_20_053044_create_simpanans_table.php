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
        Schema::create('simpanans', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('kode_simpanan')->unique();
    // $table->foreignId('nasabah_id')->constrained('nasabahs')->onDelete('cascade');
    $table->bigInteger('nasabah_id')->unsigned();
    $table->decimal('jumlah_simpanan', 15, 2);
    $table->enum('jenis_simpanan', ['transfer', 'tunai']);
    $table->enum('status', ['diajukan', 'disetujui', 'ditolak'])->default('diajukan');
    $table->string('bukti_simpanan')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simpanans');
    }
};
