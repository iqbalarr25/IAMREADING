<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

class Navigation extends Component
{
    public $count,$search,$searchBuku;
    protected $listeners = ['cart' => 'render'];

    public function render()
    {
        $cart = Transaksi::where('id_user', Auth::id())->where('status', "cart")->get();
        $this->count = count($cart);
        return view('livewire.navigation');
    }
    public function search()
    {
        return redirect('search/'.$this->search);
    }
}
