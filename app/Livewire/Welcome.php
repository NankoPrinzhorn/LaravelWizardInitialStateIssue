<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public int $number;

    public function render()
    {
        return view('livewire.welcome');
    }
}
