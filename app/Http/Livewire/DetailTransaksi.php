<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Alamat;
use App\Models\Ongkir;
use Illuminate\Support\Facades\Auth;

class DetailTransaksi extends Component
{
    public $id_transaksis,$alamats,$shippings,$payment,$ekspedisi,$jumlah,$jumlah_harga,$alamatSet,$ongkir;
    public $transaksis = [];
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
        if($this->ekspedisi==null){
            $this->ongkir = 0;
        }else{
            foreach($this->shippings as $shipping){
                if($this->ekspedisi=="jnt"){
                    $this->ongkir = $shipping->jnt;
                }elseif($this->ekspedisi=="jne"){
                    $this->ongkir = $shipping->jne;
                }elseif($this->ekspedisi=="sicepat"){
                    $this->ongkir = $shipping->sicepat;
                }elseif($this->ekspedisi=="anteraja"){
                    $this->ongkir = $shipping->anteraja;
                }
            }
        }
        $this->alamats = Alamat::where('id_user', Auth::id())->where('status', 'set')->get();
        foreach($this->alamats as $alamat){
            $this->alamatSet = $alamat->kota;
        }
        $this->shippings = Ongkir::where('kota', $this->alamatSet)->get();
        return view('livewire.detail-transaksi');
    }
    public function pay()
    {
        $checker = Transaksi::groupBy('no_invoice')->get();
        if($checker->isEmpty()){
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pin = mt_rand(100, 999) . mt_rand(100, 999) . $characters[rand(0, strlen($characters) - 1)];
            $string = str_shuffle($pin);
            foreach($this->transaksis as $transaksi){
                $save = Transaksi::where('id', $transaksi['id'])->first();
                $save->no_invoice = $string;
                $save->ongkir = $this->ongkir;
                $save->ekspedisi = $this->ekspedisi;
                $save->metode_pembayaran = $this->payment;
                $save->status = "payment";
                $save->save();
            }
        }else{
            foreach($checker as $check){
                do{
                    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(100, 999) . mt_rand(100, 999) . $characters[rand(0, strlen($characters) - 1)];
                    $string = str_shuffle($pin);
                }while($check->no_invoice == $string);
                foreach($this->transaksis as $transaksi){
                    $save = Transaksi::where('id', $transaksi['id'])->first();
                    $save->no_invoice = $string;
                    $save->ongkir = $this->ongkir;
                    $save->ekspedisi = $this->ekspedisi;
                    $save->metode_pembayaran = $this->payment;
                    $save->status = "payment";
                    $save->save();
                }
            }
        }
        $this->emit('cart');
    }
}
