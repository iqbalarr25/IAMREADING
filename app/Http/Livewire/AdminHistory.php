<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Alamat;
use Livewire\WithFileUploads;

class AdminHistory extends Component
{
    use WithFileUploads;
    public $transaksis,$processpage,$deliverypage,$view_transaksi,$openModal,$search,$totalOrder;
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
        $dataView = Transaksi::where('id',$id)->first();
        $this->view_transaksi = Transaksi::where('no_invoice', $dataView->no_invoice)->get();
        $this->alamat = Alamat::where('id_user', $dataView->user->id)->where('status', "set")->first();
        foreach($this->view_transaksi as $transaksi){
            $this->totalOrder += $transaksi->jumlah_harga;
        }
        $this->openModal();
    }
}
