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
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_produksi');
            $table->string('penerima', 30);
            $table->integer('jumlah_barang');
            $table->string('alamat_tujuan', 50);
            $table->enum('status_pengiriman', ['Diproses', 'Dikirim', 'Diterima']);
            $table->timestamps();

            $table->foreign('id_produksi')->references('id')->on('produksis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimans');
    }
};
