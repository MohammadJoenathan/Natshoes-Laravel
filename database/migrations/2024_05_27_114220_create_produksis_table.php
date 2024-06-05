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
        Schema::create('produksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_bahan_baku');
            $table->string('nama_sepatu', 30);
            $table->integer('jumlah_produksi');
            $table->date('tanggal_produksi');
            $table->string('durasi_produksi', 20);
            $table->integer('pembuatan_ke');
            $table->timestamps();

            $table->foreign('id_bahan_baku')->references('id')->on('bahan_bakus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksis');
    }
};
