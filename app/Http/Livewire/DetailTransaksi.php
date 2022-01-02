<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class DetailTransaksi extends Component
{
    public $id_transaksis,$alamats,$payment,$ekspedisi,$jumlah,$jumlah_harga;
    public $modalAlamat,$modalPayment,$modalEkspedisi;
    public $transaksis = [];
    public $count = 1;
    public $run = 0;

    public function mount($id)
    {
        $this->id_transaksis = explode('=', $id);
    }
    public function render()
    {
        foreach($this->id_transaksis as $id_transaksi){
            if($id_transaksi != null){
                $this->transaksis[] = Transaksi::find($id_transaksi);
            }
        }
        foreach($this->transaksis as $transaksi){
            $this->jumlah += $transaksi->jumlah;
            $this->jumlah_harga += $transaksi->jumlah_harga;
        }
        $this->alamats = Alamat::where('id_user', Auth::id())->where('status', 'set')->get();
        $this->run++;
        return view('livewire.detail-transaksi');
    }
    public function openModalPayment()
    {
        dd($this->payment);
        $this->modalPayment = true;
    }
    public function closeModalPayment()
    {
        $this->modalPayment = false;
    }
}
