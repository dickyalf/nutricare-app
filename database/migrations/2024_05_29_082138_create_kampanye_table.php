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
            $table->string('nama');
            $table->text('gambar')->nullable();
            $table->timestamp('tanggal_awal');
            $table->timestamp('tanggal_akhir');
            $table->text('deskripsi')->nullable();
            $table->string('lokasi');
            $table->string('targetDonasi');
            $table->enum('status', ['aktif', 'nonaktif', 'selesai']);
            $table->unsignedBigInteger('makanan_id');
            $table->foreign('makanan_id')
            ->references('id')
            ->on('makanan')
            ->onUpdate('cascade')
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
