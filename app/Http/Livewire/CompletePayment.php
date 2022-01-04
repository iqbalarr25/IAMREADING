<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Transaksi;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CompletePayment extends Component
{
    use WithFileUploads;
    public $payment,$alamat,$openModal,$image,$temp_image,$deadline,$sender_number,$sender_name,$sends;

    public function mount($no_invoice)
    {
        $datas = Transaksi::where('no_invoice', $no_invoice)->where('id_user', Auth::id())->get();
        foreach($datas as $data){
            $this->sends[] = $data;
        }
        $this->payment = Transaksi::groupBy('no_invoice')
            ->where('no_invoice', $no_invoice)
            ->where('id_user', Auth::id())
            ->selectRaw('sum(jumlah_harga) as sum, id, no_invoice, no_resi, id_user, id_buku, jumlah, ongkir, jumlah_harga, ekspedisi, metode_pembayaran, status, SNumber, SName, image, created_at, updated_at')
            ->first();
        $this->alamat = Alamat::where('status', "set")->where('id_user', Auth::id())->first();
        $this->deadline = $this->payment->updated_at->addDays(2)->format('d');
    }
    public function render()
    {
        if(now()->format('d')==$this->deadline){
            $this->payment->status = "decline";
            return redirect('livewire.history');
        }
        return view('livewire.complete-payment');
    }
    public function openModalInvoice()
    {
        $this->openModal = true;
    }
    public function closeModalInvoice()
    {
        $this->openModal = false;
    }
    public function sendInvoice()
    {
        $this->validate([
            'sender_number' => ['required', 'string', 'max:64'],
            'sender_name' => ['required', 'string', 'max:100'],
            'image' => ['required'],
        ]);
        $resume = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('public/invoice/', $resume);
        foreach($this->sends as $send){
            Transaksi::updateOrCreate(['id' => $send['id']], [
                'SNumber' => $this->sender_number,
                'SName' => $this->sender_name,
                'status' => "order",
                'image' => $resume,
            ]);
        }
        $this->closeModalInvoice();
        return redirect('history');
    }
}
