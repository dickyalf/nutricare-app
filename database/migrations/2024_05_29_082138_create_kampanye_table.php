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
        Schema::create('kampanye', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('nama')->nullable();
            $table->text('gambar')->nullable();
            $table->timestamp('tanggal_awal')->nullable();
            $table->timestamp('tanggal_akhir')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('targetDonasi')->nullable();
            $table->enum('status', ['aktif', 'nonaktif', 'selesai'])->nullable();
            $table->unsignedBigInteger('makanan_id')->nullable();
            $table->foreign('makanan_id')
            ->references('id')
            ->on('makanan')
            ->onUpdate('cascade')
            ->nullable()
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampanye');
    }
};
