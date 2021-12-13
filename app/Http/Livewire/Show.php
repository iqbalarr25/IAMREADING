<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buku;

class Show extends Component
{
    public $buku;

    public function mount($id)
    {
        $this->buku = Buku::find($id);
    }

    public function render()
    {
        return view('livewire.show');
    }
}
