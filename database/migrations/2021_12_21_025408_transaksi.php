<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice')->nullable();
            $table->string('no_resi')->nullable();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_buku')->constrained('buku');
            $table->integer('jumlah');
            $table->integer('ongkir')->nullable();
            $table->integer('jumlah_harga');
            $table->string('ekspedisi')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('status');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
}
