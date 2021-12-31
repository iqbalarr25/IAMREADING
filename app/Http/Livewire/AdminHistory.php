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
            $this->transaksis = Transaksi::where([['status','done'],['no_invoice', 'like', '%'.$this->search.'%']])
            ->orWhere([['status','done'],['ekspedisi', 'like', '%'.$this->search.'%']])->get();
        }else{
            $this->transaksis = Transaksi::where('status', "done")->get();
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
    public function view($id)
    {
        $this->view_transaksi = Transaksi::find($id);
        $this->openModal();
    }
}
