<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $title = 'Login';
    
    public function render()
    {
        return view('livewire.login');
    }
}
