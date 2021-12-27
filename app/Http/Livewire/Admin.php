<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Admin extends Component
{
    public $bukupage = true;
    public $transaksipage, $bukus;

    public function render()
    {
        $this->bukus = Buku::all();
        return view('livewire.admin');
    }
    public function bukupage()
    {
        $this->bukupage = true;
        $this->transaksipage = false;
    }
    public function transaksipage()
    {
        $this->bukupage = false;
        $this->transaksipage = true;
    }
}
