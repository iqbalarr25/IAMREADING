<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['ISBN','penulis','judul','deskripsi','halaman','bahasa','penerbit','berat','lebar','tinggi','stock','jenis','harga','image','diskon','terjual','tanggal'];
    protected $guarded = [];
}
