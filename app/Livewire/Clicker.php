<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Clicker extends Component
{
    public $title = "Hello World....";

    public function createNewUser()
    {
        User::create([
            'name' => "test 2",
            'email' => "test2@gmail.com",
            'password' => Hash::make("password"),
        ]);
    }


    public function render()
    {
        $name = "Soe Moe Kyaw";
        $job = "Backend developer";
        $user = User::all();
        return view('livewire.clicker',[
            'name' => $name,
            'job' => $job,
            'user' => $user
        ]);
    }
}
