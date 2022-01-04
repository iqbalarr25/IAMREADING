<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class History extends Component
{
    public $histories,$array,$search,$jumlah_harga;

    public function render()
    {
        if($this->search!=null){
            $this->histories = Transaksi::whereHas('buku', function($q) {
                $q->where('judul', 'like', '%'.$this->search.'%');
            })->where('id_user', Auth::id())->groupBy('no_invoice')->selectRaw('sum(jumlah_harga) as sum, no_invoice')->get();
        }else{  
            $this->histories = Transaksi::where('id_user', Auth::id())->groupBy('no_invoice')
            ->selectRaw('sum(jumlah_harga) as sum, id, no_invoice, no_resi, id_user, id_buku, jumlah, ongkir, jumlah_harga, ekspedisi, metode_pembayaran, status, SNumber, SName, image, created_at, updated_at')
            ->get();
        }
        return view('livewire.history');
    }
}
