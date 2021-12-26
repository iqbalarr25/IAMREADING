<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $buku,$similarBukus,$buku_id,$jumlah_harga,$harga,$count,$similarJudul;
    public $jumlahBeli = 1;

    public function mount($id)
    {
        $this->buku = Buku::find($id);
        $this->buku_id = $id;
        if($this->buku->diskon!=null){
            $this->harga = $this->buku->diskon;
        }else{
            $this->harga = $this->buku->harga;
        }
        $this->jumlah_harga = $this->harga*$this->jumlahBeli;
    }
    public function render()
    {
        $this->similarJudul = explode(' ', $this->buku->judul, 1);
        $this->similarBukus = Buku::where('jenis', $this->buku->jenis)->where('judul', 'like', '%'.$this->similarJudul[0].'%')->get();
        return view('livewire.show');
    }
    public function plus()
    {
        if($this->jumlahBeli<$this->buku->stock){
            $this->jumlahBeli++;
        }
        if($this->buku->diskon!=null){
            $this->harga = $this->buku->diskon;
        }else{
            $this->harga = $this->buku->harga;
        }
        $this->jumlah_harga = $this->harga*$this->jumlahBeli;
    }
    public function minus()
    {
        if($this->jumlahBeli!=1){
            $this->jumlahBeli--;
        }
        if($this->buku->diskon!=null){
            $this->harga = $this->buku->diskon;
        }else{
            $this->harga = $this->buku->harga;
        }
        $this->jumlah_harga = $this->harga*$this->jumlahBeli;
    }
    public function buy()
    {   
        if(Auth::check()){
            Transaksi::create([
                'id_user' => Auth::id(),
                'id_buku' => $this->buku_id,
                'jumlah' => $this->jumlahBeli,
                'jumlah_harga' => $this->jumlah_harga,
                'status' => "cart",
            ]);
            $this->buku->stock = $this->buku->stock-$this->jumlahBeli;
            $this->buku->save();
            $this->emit('cart');
        }else{
            return redirect('login');
        }
        
    }
    public function cart()
    {
        if(Auth::check()){
            Transaksi::create([
                'id_user' => Auth::id(),
                'id_buku' => $this->buku_id,
                'jumlah' => $this->jumlahBeli,
                'jumlah_harga' => $this->jumlah_harga,
                'status' => "cart",
            ]);
            $this->buku->stock = $this->buku->stock-$this->jumlahBeli;
            $this->buku->save();
            $this->emit('cart');
        }else{
            return redirect('login');
        }
    }
}
