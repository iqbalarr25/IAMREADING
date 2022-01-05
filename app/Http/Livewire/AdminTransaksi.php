<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Alamat;
use Livewire\WithFileUploads;

class AdminTransaksi extends Component
{
    use WithFileUploads;
    public $transaksis,$processpage,$deliverypage,$view_transaksi,$openModal,$openResi,$search,$resi,$totalOrder,$alamat;
    public $orderpage = true;

    public function render()
    {
        if($this->orderpage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','order'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','order'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "order")->latest()->get();
            }
        }elseif($this->processpage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','process'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','process'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "process")->latest()->get();
            }
        }elseif($this->deliverypage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','delivery'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','delivery'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "delivery")->latest()->get();
            }
        }
        return view('livewire.admin.admin-transaksi');
    }   
    public function openModal()
    {
        $this->openModal = true;
    }
    public function closeModal()
    {
        $this->openModal = false;
        $this->totalOrder = 0;
    }
    public function orderpage()
    {
        $this->orderpage = true;
        $this->processpage = false;
        $this->deliverypage = false;
    }
    public function processpage()
    {
        $this->orderpage = false;
        $this->processpage = true;
        $this->deliverypage = false;
    }
    public function deliverypage()
    {
        $this->orderpage = false;
        $this->processpage = false;
        $this->deliverypage = true;
    }
    public function view($id)
    {
        $dataView = Transaksi::where('id',$id)->first();
        $this->view_transaksi = Transaksi::where('no_invoice', $dataView->no_invoice)->get();
        $this->alamat = Alamat::where('id_user', $dataView->user->id)->where('status', "set")->first();
        foreach($this->view_transaksi as $transaksi){
            $this->totalOrder += $transaksi->jumlah_harga;
        }
        $this->openModal();
    }
    public function openResi()
    {
        $this->openResi = true;
        $this->openModal = false;
    }
    public function closeResi()
    {
        $this->openModal = true;
        $this->openResi = false;
    }
    public function save()
    {
        $this->openResi();
    }
    public function accept()
    {
        foreach($this->view_transaksi as $transaksi){
            $transaksi->status = "process";
            $transaksi->save();
        }
        $this->closeModal();
    }
    public function decline()
    {
        foreach($this->view_transaksi as $transaksi){
            $transaksi->status = "decline";
            $transaksi->save();
        }
        $this->closeModal();
    }
    public function saveResi()
    {
        foreach($this->view_transaksi as $transaksi){
            $transaksi->no_resi = $this->resi;
            $transaksi->status = "delivery";
            $transaksi->save();
        }
        $this->openModal = false;
        $this->openResi = false;
    }
}
