<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ongkir;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class Address extends Component
{
    public $openModal;
    public $alamat_id,$alamats,$provinsislist,$kotaslist,$kabupatenslist,$label,$no_hp,$penerima,$provinsi,$kota,$kabupaten,$kode_pos,$alamat_lengkap;
    public $status = "notset";
    
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
        $this->resetModal();
    }
    public function resetModal()
    {
        $this->label = "";
        $this->no_hp = "";
        $this->penerima = "";
        $this->provinsi = "";
        $this->kota = "";
        $this->kabupaten = "";
        $this->kode_pos = "";
        $this->alamat_lengkap = "";
        $this->status = "";
    }
    public function saveAddress()
    {
        $this->validate([
            'label' => ['required', 'string', 'max:25'],
            'no_hp' => ['required', 'string', 'max:100'],
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
            'no_hp' => $this->no_hp,
            'penerima' => $this->penerima,
            'provinsi' => $this->provinsi,
            'kota' => $this->kota,
            'kabupaten' => $this->kabupaten,
            'kode_pos' => $this->kode_pos,
            'alamat_lengkap' => $this->alamat_lengkap,
            'status' => "$this->status",
        ]);
        $this->closeModal();
        $this->resetModal();
    }
    public function edit($id)
    {
        $post = Alamat::find($id);
        $this->alamat_id = $id;
        $this->label = $post->label;
        $this->no_hp = $post->no_hp;
        $this->penerima = $post->penerima;
        $this->provinsi = $post->provinsi;
        $this->kota = $post->kota;
        $this->kabupaten = $post->kabupaten;
        $this->kode_pos = $post->kode_pos;
        $this->alamat_lengkap = $post->alamat_lengkap;
        $this->status = $post->status;
        $this->openModal();
    }
    public function delete($id)
    {
        Alamat::find($id)->delete();
    }
    public function main($id)
    {
        $unMain = Alamat::where('id_user',Auth::id())->where('status', "set")->first();
        if($unMain!=null){
            $unMain->status = "notset";
            $unMain->save();
        }
        $toMain = Alamat::find($id);
        $toMain->status = "set";
        $toMain->save();
    }
}
