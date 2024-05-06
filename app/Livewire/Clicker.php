<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;

    public function createNewUser()
    {
        $this->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:6'],
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset(['name','email','password']);

        session()->flash('success', 'User successfully created.');
    }


    public function render()
    {
        $users = User::all();
        return view('livewire.clicker',[
            'users' => $users
        ]);
    }
}
