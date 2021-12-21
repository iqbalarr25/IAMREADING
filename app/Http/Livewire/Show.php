<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Show extends Component
{
    public $buku, $similarBukus;
    public $jumlahBeli = 1;


    public function mount($id)
    {
        $this->buku = Buku::find($id);
    }
    public function render()
    {
        $this->similarBukus = Buku::where('jenis', $this->buku->jenis)->where('penulis', $this->buku->penulis)->get();
        return view('livewire.show');
    }
    public function plus()
    {
        if($this->jumlahBeli<$this->buku->stock){
            $this->jumlahBeli++;
        }
    }
    public function minus()
    {
        if($this->jumlahBeli!=1){
            $this->jumlahBeli--;
        }
    }
    public function buy()
    {

    }

    public function cart()
    {
        
    }
}
