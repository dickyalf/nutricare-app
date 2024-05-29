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
        Schema::create('bukti_donasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kampanye_id');
            $table->foreign('kampanye_id')
            ->references('id')
            ->on('kampanye')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('foto_donasi_id')->nullable();
            $table->foreign('foto_donasi_id')
            ->references('id')
            ->on('foto_donasi')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukti_donasi');
    }
};
