<div class="card m-2 p-2 w-100 justify-content-center ">
    <div class="section">
        <h1 class="display-5">Comments</h1>
        {{-- error message --}}
        @error('newComment')
            <span class="error">{{ $message }}</span>
        @enderror

        {{-- flash messages --}}
        <section>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
            @endif
        </section>

        <section>
            @if (session()->has('delete_message'))
                <div class="alert alert-danger">
                    {{ session('delete_message') }}
                </div>
            @endif
        </section>

        {{-- form input --}}
        <div class="section flex">
            <form class="input-group mb-3" wire:submit.prevent="addComment">

                <input type="text" class="form-control" placeholder="what's in your mind?"
                    wire:model.debounce.500ms="newComment">
                <button type="submit" class="btn btn-primary ml-2">Add</button>

                <div class="row">
                    {{-- <div class="col-12 pb-2">
                        @if ($image)
                            Photo Preview:
                            <img src="{{ $image->temporaryUrl() }}">
                        @endif
                        <input type="file" wire:model="image">
                    </div> --}}
                    <div class="col flex ">

                    </div>
                </div>

            </form>
        </div>
        <div class="section">
            @foreach ($comments as $comment)
                <div class="card m-1 p-2">
                    <div class="flex justify-content-between">
                        <div class="flex">
                            <h4>{{ $comment->creator->name }}</h4>
                            <h6 class="text-muted m-2">{{ $comment->created_at->diffForHumans() }}</h6>
                        </div>

                        <p type="button" class="close" aria-label="Close" wire:click="remove({{ $comment->id }})">
                            <span aria-hidden="true">&times;</span>
                        </p>
                    </div>


                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <hr>
            {{-- pagination links --}}
            {{ $comments->links('livewire.pagination-links') }}
        </div>


    </div>

</div>
