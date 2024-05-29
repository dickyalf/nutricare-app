<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('pengguna_id')
            ->references('id')
            ->on('pengguna')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('kampanye_id');
            $table->foreign('kampanye_id')
            ->references('id')
            ->on('kampanye')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamp('tanggal_transaksi');
            $table->integer('jumlahMakanan');
            $table->integer('totalDonasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
