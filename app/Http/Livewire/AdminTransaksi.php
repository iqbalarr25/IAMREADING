<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Livewire\WithFileUploads;

class AdminTransaksi extends Component
{
    use WithFileUploads;
    public $transaksis,$processpage,$deliverypage,$view_transaksi,$openModal,$openResi,$search,$resi;
    public $orderpage = true;

    public function render()
    {
        if($this->orderpage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','order'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','order'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "order")->get();
            }
        }elseif($this->processpage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','process'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','process'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "process")->get();
            }
        }elseif($this->deliverypage){
            if($this->search!=null){
                $this->transaksis = Transaksi::where([['status','delivery'],['no_invoice', 'like', '%'.$this->search.'%']])
                ->orWhere([['status','delivery'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
            }else{
                $this->transaksis = Transaksi::where('status', "delivery")->get();
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
        $this->view_transaksi = Transaksi::find($id);
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
}
