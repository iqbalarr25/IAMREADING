<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Dashboard extends Component
{
    public $novelpage, $komikpage, $novelsrec, $novelsnew, $novelsdisc, $komiksrec, $komiknew, $komiksdisc, $reclist, $newlist, $disclist;
    public function render()
    {
        $this->novelpage();
        return view('livewire.dashboard');
    }
    public function novelpage(){
        $this->novelpage=true;
        $this->komikpage=false;
        $this->resetlist();
        $this->novelsrec = Buku::where('jenis', 'Novel')->latest()->take(5)->get();
        $this->novelsnew = Buku::where('jenis', 'Novel')->orderBy('terjual', 'DESC')->take(5)->get();
        $this->novelsdisc = Buku::where('jenis', 'Novel')->whereNotNull('diskon')->take(5)->get();
    }
    public function komikpage(){
        $this->komikpage=true;
        $this->novelpage=false;
        $this->resetlist();
        $this->komiksnew = Buku::where('jenis', 'Komik')->latest()->take(5)->get();
        $this->komiksnew = Buku::where('jenis', 'Komik')->orderBy('terjual', 'DESC')->take(5)->get();
        $this->komiksdisc = Buku::where('jenis', 'Komik')->whereNotNull('diskon')->take(5)->get();
    }
    public function resetList(){
        $this->reclist=true;
        $this->newlist=true;
        $this->disclist=true;
    }
}
