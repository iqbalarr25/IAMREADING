<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    protected $fillable = ['label','no_hp','id_user','penerima','provinsi','kota','kabupaten','kode_pos','alamat_lengkap','status'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
}
