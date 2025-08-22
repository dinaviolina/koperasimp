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
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_nasabah', 20)->unique();
            $table->string('slug')->unique();
            $table->string('nama', 100);
            $table->string('NIK', 16)->unique();
            $table->string('alamat', 255);
            $table->string('telepon', 15)->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_bergabung');
            $table->decimal('saldo', 15, 2)->default(0);
            $table->decimal('pinjaman', 15, 2)->default(0);
            $table->enum('status', ['aktif', 'tidak aktif'])->default('tidak aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nasabahs');
    }
};
