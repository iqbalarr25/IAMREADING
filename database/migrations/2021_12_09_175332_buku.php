<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN')->unique();
            $table->string('penulis');
            $table->string('judul');
            $table->text('deskripsi');
            $table->decimal('halaman');
            $table->string('bahasa');
            $table->string('penerbit');
            $table->decimal('berat');
            $table->decimal('lebar');
            $table->decimal('tinggi');
            $table->integer('stock');
            $table->string('jenis');
            $table->integer('harga');
            $table->string('image');
            $table->integer('diskon')->nullable();
            $table->integer('terjual')->nullable();
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
        Schema::dropIfExists('buku');
    }
}
