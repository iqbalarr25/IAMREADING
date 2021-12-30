<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{
    public $transaksipage,$historypage;
    public $bukupage=true;
    
    public function render()
    {
        return view('livewire.admin.admin');
    }
    public function bukupage()
    {
        $this->bukupage = true;
        $this->transaksipage = false;
        $this->historypage = false;
    }
    public function transaksipage()
    {
        $this->bukupage = false;
        $this->transaksipage = true;
        $this->historypage = false;
    }
    public function historypage()
    {
        $this->bukupage = false;
        $this->transaksipage = false;
        $this->historypage = true;
    }
}
