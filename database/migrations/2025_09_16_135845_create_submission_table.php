<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->id('id_submission');
            $table->string('file_url');
            $table->integer('nilai')->nullable();
            $table->unsignedBigInteger('id_tugas');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->foreign('id_tugas')->references('id_tugas')->on('tugas')->onDelete('cascade');
            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission');
    }
};
