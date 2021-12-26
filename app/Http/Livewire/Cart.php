<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    public $selectedBukus = [];
    public $count = 0;
    public $selectAll = false;
    public $carts, $jumlah;
    public $jumlah_harga = 0; 

    public function render()
    {
        $this->jumlah_harga = 0;
        foreach($this->selectedBukus as $selectedBuku){
            $test = Transaksi::find($selectedBuku);
            $this->jumlah_harga +=  $test->jumlah_harga;
        }
        $this->count = count($this->selectedBukus);
        
        $this->carts = Transaksi::where('id_user',Auth::id())->where('status', "cart")->get();
        return view('livewire.cart');
    }
    public function updateSelectAll()
    {
        $this->selectAll = !$this->selectAll;
        if($this->selectAll){
            $this->selectedBukus = Transaksi::where('id_user',Auth::id())->where('status', "cart")->pluck('id');
        }else{
            $this->selectedBukus = [];
        }
    }
    public function delete($id)
    {
        $test = Transaksi::find($id);
        $test->buku->stock += $test->jumlah;
        $test->buku->save();
        $test->delete();
        $this->emit('cart');
    }
}
