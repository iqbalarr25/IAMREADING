<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;

class ListDetailTransaksi extends Component
{
    public $transaksis,$id_transaksis,$jumlah,$jumlah_harga;
    public $count = 1;

    public function render()
    {
        foreach($this->transaksis as $transaksi){
            $this->jumlah += $transaksi->jumlah;
            $this->jumlah_harga += $transaksi->jumlah_harga;
        }
        return view('livewire.list-detail-transaksi');
    }
}
