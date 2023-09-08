<?php

namespace App\Livewire;

use App\Models\SupportTicket;
use Livewire\Component;

class Tickets extends Component
{
    public $active;

    protected $listener = ['ticketSelected'];

    public function ticketSelected($ticketId)
    {
        $this->active = $ticketId;
    }

    public function render()
    {
        return view('livewire.tickets', [
            'tickets' => SupportTicket::all()
        ]);
    }
}
