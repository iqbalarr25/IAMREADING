<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Dashboard extends Component
{
    public $firstreload=true;
    public $bukusrec, $bukusnew, $bukusdisc, $novelpage, $komikpage, $reclist, $newlist, $disclist;

    public function render()
    {
        if($this->firstreload){
            $this->novelpage();
            $this->firstreload= !$this->firstreload;
        }
        return view('livewire.dashboard');
    }
    public function novelpage(){
        $this->novelpage=true;
        $this->komikpage=false;
        $this->semua();
        $this->bukusrec = Buku::where('jenis', 'Novel')->latest()->take(5)->get();
        $this->bukusnew = Buku::where('jenis', 'Novel')->orderBy('terjual', 'DESC')->take(5)->get();
        $this->bukusdisc = Buku::where('jenis', 'Novel')->whereNotNull('diskon')->take(5)->get();
    }
    public function komikpage(){
        $this->komikpage=true;
        $this->novelpage=false;
        $this->semua();
        $this->bukusrec = Buku::where('jenis', 'Komik')->latest()->take(5)->get();
        $this->bukusnew = Buku::where('jenis', 'Komik')->orderBy('terjual', 'DESC')->take(5)->get();
        $this->bukusdisc = Buku::where('jenis', 'Komik')->whereNotNull('diskon')->take(5)->get();
    }
    public function semua(){
        $this->reclist=true;
        $this->newlist=true;
        $this->disclist=true;
    }
    public function rekomendasi(){
        $this->reclist=true;
        $this->newlist=false;
        $this->disclist=false;
    }
    public function baru(){
        $this->reclist=false;
        $this->newlist=true;
        $this->disclist=false;
    }
    public function diskon(){
        $this->reclist=false;
        $this->newlist=false;
        $this->disclist=true;
    }
}
