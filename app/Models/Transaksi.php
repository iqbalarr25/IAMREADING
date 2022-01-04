<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['no_invoice','no_resi','id_user','id_buku','jumlah','jumlah_harga','ekspedisi','metode_pembayaran','status','image','SNumber','SName'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
    public function buku()
    {
        return $this->belongsTo('App\Models\Buku', 'id_buku', 'id');
    }
}
