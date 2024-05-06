<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{

    public function handelClick()
    {
        dd('He Click Me !');
    }


    public function render()
    {
        return view('livewire.clicker');
    }
}
