<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('nilais', function (Blueprint $table) {
        $table->id();

        $table->foreignId('mahasiswa_id')
              ->constrained('mahasiswas')
              ->onDelete('cascade');

        $table->foreignId('kelas_id')
              ->constrained('kelas')
              ->onDelete('cascade');

        $table->integer('tugas');
        $table->integer('uts');
        $table->integer('uas');
        $table->float('rata_rata')->nullable();

        $table->timestamps();
    });
}
};
