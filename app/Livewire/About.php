<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{

    public $title = 'live along';

    public function render()
    {
        return view('livewire.about');
    }
}
