<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name,$email,$gender,$phone,$firstname,$lastname;
    
    public function mount()
    {
        $this->name = explode(' ', Auth::user()->name, 2);
        $this->firstname = $this->name[0];
        $this->lastname = $this->name[1];
        $this->email = Auth::user()->email;
        $this->gender = Auth::user()->gender;
        $this->phone = Auth::user()->phone;
    }
    public function render()
    {
        return view('livewire.profile');
    }
    public function update()
    {
        $user = User::find(Auth::id());
        $user->name = $this->firstname." ".$this->lastname;
        $user->email = $this->email;
        $user->gender = $this->gender;
        $user->phone = $this->phone;
        $user->save();  
        $this->emitSelf('render');
        $this->emit('cart');
    }
}
