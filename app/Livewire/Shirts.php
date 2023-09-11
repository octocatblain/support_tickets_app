<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Layouts\App;

class Shirts extends Component
{
    public $title = 'Shirts page';
    public $name = 'Blain Muema finally got it!!!';

    public function render()
    {
        return view('livewire.shirts', [
            'title' => $this->title,
            'name' => $this->name,
        ])->layout('livewire.layouts.app');
    }
}
