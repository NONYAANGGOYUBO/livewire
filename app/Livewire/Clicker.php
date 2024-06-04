<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function handleClick()
    {
        dump("you just hit the click button");
    }
    public function render()
    {
        return view('livewire.clicker');
    }
}
