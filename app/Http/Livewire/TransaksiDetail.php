<?php

namespace App\Http\Livewire;
use App\Models\Transaksi;
use App\Models\Alamat;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class TransaksiDetail extends Component
{
    public $list_transaksis,$jumlah_harga,$jumlah,$alamat;
    public $transaksis = [];
    public $count = 1;

    public function mount($no_invoice)
    {
        $this->alamat = Alamat::where('id_user', Auth::id())->where('status', "set")->first();
        $this->list_transaksis = Transaksi::where('id_user', Auth::id())->where('no_invoice', $no_invoice)->get();
        foreach($this->list_transaksis as $list_transaksi){
            $this->transaksis[] = $list_transaksi;
        }
        $this->total = Transaksi::where('id_user', Auth::id())->where('no_invoice', $no_invoice)
        ->selectRaw('sum(jumlah_harga) as sum')
        ->first();
    }
    public function render()
    {
        return view('livewire.transaksi-detail');
    }
    public function done($id)
    {
        $data = Transaksi::where('id', $id)->first();
        $datas = Transaksi::where('no_invoice', $data->no_invoice)->get();
        foreach($datas as $transaksi){
            $transaksi->status = "done";
            $transaksi->buku->terjual = $transaksi->jumlah;
            $transaksi->buku->save();
            $transaksi->save();
        }
        return redirect('/history');
    }
    public function cancel($id)
    {
        $data = Transaksi::where('id', $id)->first();
        $datas = Transaksi::where('no_invoice', $data->no_invoice)->get();
        foreach($datas as $transaksi){
            $transaksi->buku->stock += $transaksi->jumlah; 
            $transaksi->buku->save();
            $transaksi->delete();
        }
        return redirect('/history');
    }
}
