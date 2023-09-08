<div class="card m-2 p-2 w-100">
    <div class="section justify-content-center ">
        <h1 class="display-4">Support Tickets</h1>
        </h1>
    </div>
    <section>
        @foreach ($tickets as $ticket)
            <div class="card m-1 p-2" {{ $active == $ticket->id ? 'bg-gray' : '' }}
                wire:click="$dispatch('ticketSelected')" wire:key="{{ $ticket->id }}">
                <p class="text">{{ $ticket->questions }}</p>
            </div>
        @endforeach
    </section>
</div>
