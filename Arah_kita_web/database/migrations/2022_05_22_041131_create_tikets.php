<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_mobile_id');
            $table->foreignId('wisata_id');
            $table->foreignId('transaksi_id');
            $table->string('kode_tiket');
            $table->string('tgl_tiket');
            $table->string('nama_pembeli');
            $table->string('nama_wisata');
            $table->string('jumlah_tiket');
            $table->string('total_harga');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tikets');
    }
};
