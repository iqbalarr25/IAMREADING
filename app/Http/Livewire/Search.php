<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $search,$searchBuku,$reclist,$newlist,$disclist, $novelpage, $komikpage;
    public $allpage = true;
    public $alllist = true;
    
    public function mount($judul)
    {
        switch($judul){
            case ('All'):
                $this->allpage();
                break;
            case ('Novel'):
                $this->novelpage();
                break;
            case ('Komik'):
                $this->komikpage();
                break;
            default:
                $this->search = $judul;
                $this->allpage();    
        }
    }
    public function render()
    {
        if($this->allpage){
            $bukusall = Buku::where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusnew = Buku::latest()->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusrec = Buku::whereNotNull('terjual')->orderBy('terjual', 'DESC')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusdisc = Buku::whereNotNull('diskon')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
        }elseif($this->novelpage){
            $bukusall = Buku::where('jenis', 'Novel')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusnew = Buku::where('jenis', 'Novel')->latest()->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusrec = Buku::where('jenis', 'Novel')->whereNotNull('terjual')->orderBy('terjual', 'DESC')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusdisc = Buku::where('jenis', 'Novel')->whereNotNull('diskon')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
        }elseif($this->komikpage){
            $bukusall = Buku::where('jenis', 'Komik')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusnew = Buku::where('jenis', 'Komik')->latest()->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusrec = Buku::where('jenis', 'Komik')->whereNotNull('terjual')->orderBy('terjual', 'DESC')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
            $bukusdisc = Buku::where('jenis', 'Komik')->whereNotNull('diskon')->where('judul', 'like', '%'.$this->search.'%')->paginate(12);
        }
        return view('livewire.search', ['bukusall' => $bukusall, 'bukusnew' => $bukusnew, 'bukusrec' => $bukusrec, 'bukusdisc' => $bukusdisc]);
    }
    public function semua(){
        $this->alllist=true;
        $this->reclist=false;
        $this->newlist=false;
        $this->disclist=false;
    }
    public function rekomendasi(){
        $this->alllist=false;
        $this->reclist=true;
        $this->newlist=false;
        $this->disclist=false;
    }
    public function baru(){
        $this->alllist = false;
        $this->reclist=false;
        $this->newlist=true;
        $this->disclist=false;
    }
    public function diskon(){
        $this->alllist = false;
        $this->reclist=false;
        $this->newlist=false;
        $this->disclist=true;
    }
    public function allpage()
    {
        $this->allpage = true;
        $this->novelpage = false;
        $this->komikpage = false;
    }
    public function novelpage()
    {
        $this->allpage = false;
        $this->novelpage = true;
        $this->komikpage = false;
    }
    public function komikpage()
    {
        $this->allpage = false;
        $this->novelpage = false;
        $this->komikpage = true;
    }
}
