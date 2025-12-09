<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();

            // Relasi ke user
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Relasi ke kelas
            $table->foreignId('kelas_id')
                  ->nullable()
                  ->constrained('kelas')
                  ->onDelete('cascade');

            // Nominal pembayaran
            $table->integer('nominal')->default(0);

            // Upload bukti
            $table->string('bukti')->nullable();

            // Status
            $table->enum('status', ['pending', 'diterima', 'ditolak'])
                  ->default('pending');

            // Catatan admin
            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
