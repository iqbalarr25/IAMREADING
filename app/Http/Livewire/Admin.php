<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;
use Livewire\WithFileUploads;

class Admin extends Component
{
    use WithFileUploads;
    public $bukupage = true;
    public $transaksipage,$buku_id, $bukus,$isbn,$penulis,$judul,$penerbit,$tanggal,$bahasa,$berat,$lebar,$tinggi,$stock,$halaman,$jenis,$harga,$diskon,$deskripsi,$image,$temp_image, $openModal,$search;
    public $edit=false;

    public function render()
    {
        if($this->search!=null){
            $this->bukus = Buku::where('ISBN', 'like', '%'.$this->search.'%')
            ->orWhere('judul', 'like', '%'.$this->search.'%')
            ->orWhere('penerbit', 'like', '%'.$this->search.'%')
            ->orWhere('bahasa', 'like', '%'.$this->search.'%')
            ->orWhere('jenis', 'like', '%'.$this->search.'%')
            ->orWhere('penulis', 'like', '%'.$this->search.'%')->get();
        }else{
            $this->bukus = Buku::all();
        }
        return view('livewire.admin');
    }
    public function bukupage()
    {
        $this->bukupage = true;
        $this->transaksipage = false;
    }
    public function transaksipage()
    {
        $this->bukupage = false;
        $this->transaksipage = true;
    }
    public function openModal()
    {
        $this->openModal = true;
    }
    public function closeModal()
    {
        $this->openModal = false;
        $this->edit=false;
        $this->resetCreateForm();
    }
    private function resetCreateForm(){
        $this->buku_id = '';
        $this->isbn = '';
        $this->penulis = '';
        $this->judul = '';
        $this->penerbit = '';
        $this->tanggal = '';
        $this->bahasa = '';
        $this->berat = '';
        $this->lebar = '';
        $this->tinggi = '';
        $this->stock = '';
        $this->halaman = '';
        $this->jenis = '';
        $this->harga = '';
        $this->diskon = '';
        $this->deskripsi = '';
        $this->image = '';
        $this->temp_image = '';
    }
    
    public function save()
    {
        $this->validate([
            'isbn' => ['required', 'string', 'max:64',"unique:buku,ISBN,$this->buku_id"],
            'penulis' => ['required', 'string', 'max:100'],
            'judul' => ['required', 'string', 'max:100'],
            'penerbit' =>['required', 'string', 'max:100'],
            'tanggal' => ['required', 'string', 'max:100'],
            'bahasa' => ['required', 'string', 'max:100'],
            'berat' => ['required'],
            'lebar' => ['required'],
            'tinggi' => ['required'],
            'stock' => ['required', 'integer'],
            'halaman' => ['required', 'integer'],
            'jenis' => ['required', 'string', 'max:100'],
            'harga' => ['required', 'integer'],
            'diskon' => ['integer'],
            'deskripsi' => ['required', 'string', 'max:1000'],
            'image' => ['required'],
        ]);
        if($this->edit==true && $this->image != $this->temp_image){
            $buku = Buku::findOrFail($this->buku_id);
            unlink(public_path().'/cover/'.$buku->image);
            $this->edit=false;
        }
        if($this->image == $this->temp_image){
            Buku::updateOrCreate(['id' => $this->buku_id], [
                'ISBN' => $this->isbn,
                'penulis' => $this->penulis,
                'judul' => $this->judul,
                'penerbit' => $this->penerbit,
                'tanggal' => $this->tanggal,
                'bahasa' => $this->bahasa,
                'berat' => $this->berat,
                'lebar' => $this->lebar,
                'tinggi' => $this->tinggi,
                'stock' => $this->stock,
                'halaman' => $this->halaman,
                'jenis' => $this->jenis,
                'harga' => $this->harga,
                'diskon' => $this->diskon,
                'deskripsi' => $this->deskripsi,
            ]);
        }else{
            $resume = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('public/cover/', $resume);
            Buku::updateOrCreate(['id' => $this->buku_id], [
                'ISBN' => $this->isbn,
                'penulis' => $this->penulis,
                'judul' => $this->judul,
                'penerbit' => $this->penerbit,
                'tanggal' => $this->tanggal,
                'bahasa' => $this->bahasa,
                'berat' => $this->berat,
                'lebar' => $this->lebar,
                'tinggi' => $this->tinggi,
                'stock' => $this->stock,
                'halaman' => $this->halaman,
                'jenis' => $this->jenis,
                'harga' => $this->harga,
                'diskon' => $this->diskon,
                'deskripsi' => $this->deskripsi,
                'image' => $resume,
            ]);
        }
        session()->flash('message', $this->buku_id ? 'Data updated successfully.' : 'Data added successfully.');
        $this->edit=false;
        $this->closeModal();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $this->buku_id = $id;
        $this->isbn = $buku->ISBN;
        $this->penulis = $buku->penulis;
        $this->judul = $buku->judul;
        $this->penerbit = $buku->penerbit;
        $this->tanggal = $buku->tanggal;
        $this->bahasa = $buku->bahasa;
        $this->berat = $buku->berat;
        $this->lebar = $buku->lebar;
        $this->tinggi = $buku->tinggi;
        $this->stock = $buku->stock;
        $this->halaman = $buku->halaman;
        $this->jenis = $buku->jenis;
        $this->harga = $buku->harga;
        $this->diskon = $buku->diskon;
        $this->deskripsi = $buku->deskripsi;
        $this->image = $buku->image;
        $this->temp_image = $this->image;
        $this->edit = true;
        $this->openModal();
    }
    public function delete($id)
    {
        $buku = Buku::findOrFail($id);
        unlink(public_path().'/cover/'.$buku->image);
        Buku::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
