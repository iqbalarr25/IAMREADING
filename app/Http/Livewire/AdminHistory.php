<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Livewire\WithFileUploads;

class AdminHistory extends Component
{
    use WithFileUploads;
    public $transaksis,$processpage,$deliverypage,$view_transaksi,$openModal,$search;
    public $orderpage = true;
    
    public function render()
    {
        if($this->search!=null){
            $this->search();
        }else{
            $this->transaksis = Transaksi::where('status', "order")->get();
        }
        return view('livewire.admin.admin-history');
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
    private function search()
    {
        $this->transaksis = Transaksi::where('no_invoice', 'like', '%'.$this->search.'%')
        ->orWhere('ekspedisi', 'like', '%'.$this->search.'%')->get();
    }
}
