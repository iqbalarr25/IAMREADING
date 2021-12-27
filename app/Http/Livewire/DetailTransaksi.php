<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;

class DetailTransaksi extends Component
{
    public $id_transaksis;
    public $transaksis = [];
    public $jumlah = 0;
    public $jumlah_harga = 0;
    public $count = 1;

    public function mount($id)
    {
        $this->id_transaksis = explode('=', $id);
        foreach($this->id_transaksis as $id_transaksi){
            if($id_transaksi != null){
                $this->transaksis[] = Transaksi::find($id_transaksi);
            }
        }
        foreach($this->transaksis as $transaksi){
            $this->jumlah += $transaksi->jumlah;
            $this->jumlah_harga += $transaksi->jumlah_harga;
        }
    }
    
    public function render()
    {
        return view('livewire.detail-transaksi');
    }
}
