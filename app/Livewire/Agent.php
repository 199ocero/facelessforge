<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Agent extends Component
{
    #[Title('Agent')]
    public function render()
    {
        return view('livewire.agent');
    }
}
