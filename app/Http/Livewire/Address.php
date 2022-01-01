<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ongkir;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class Address extends Component
{
    public $openModal;
    public $alamat_id,$alamats,$provinsislist,$kotaslist,$kabupatenslist,$label,$penerima,$provinsi,$kota,$kabupaten,$kode_pos,$alamat_lengkap;
    
    public function render()
    {
        $this->alamats = Alamat::where('id_user', Auth::id())->get();
        $this->provinsislist = Ongkir::groupBy('provinsi')->get();
        if($this->provinsi!=null){
            $this->kotaslist = Ongkir::where('provinsi',$this->provinsi)->groupBy('kota')->get();
        }
        if($this->kota!=null){
            $this->kabupatenslist = Ongkir::where('kota',$this->kota)->groupBy('kabupaten')->get();
        }
        return view('livewire.address');
    }   
    public function openModal()
    {
        $this->openModal = true;
    }
    public function closeModal()
    {
        $this->openModal = false;
    }
    public function saveAddress()
    {
        $this->validate([
            'label' => ['required', 'string', 'max:25'],
            'penerima' => ['required', 'string', 'max:100'],
            'provinsi' => ['required', 'string', 'max:100'],
            'kota' =>['required', 'string', 'max:100'],
            'kabupaten' => ['required', 'string', 'max:100'],
            'kode_pos' => ['required', 'string', 'max:100'],
            'alamat_lengkap' => ['required', 'string', 'max:100'],
        ]);
        Alamat::updateOrCreate(['id' => $this->alamat_id], [
            'id_user' => Auth::id(),
            'label' => $this->label,
            'penerima' => $this->penerima,
            'provinsi' => $this->provinsi,
            'kota' => $this->kota,
            'kabupaten' => $this->kabupaten,
            'kode_pos' => $this->kode_pos,
            'alamat_lengkap' => $this->alamat_lengkap,
        ]);
        $this->closeModal();
    } 
}
