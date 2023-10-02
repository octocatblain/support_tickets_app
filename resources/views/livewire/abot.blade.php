@section('title')
    {{ $title }}
@endsection
<div>
    <div class='container'>
        <div class='row'>
            <div class='col'>
                <p>😁Contact me <a href="mailto:blainmuema@gmail.com">here </a>incase you want to help with the
                    following issues I
                    didn't solve on this web app:</p>
                <h5>List of issues you could help me with:</h5>

                <ol>
                    {{-- <li class="list-item text-strike ">1. Middleware

                    </li> --}}
                    <li class="list-item">2. Event share in support tickets and comments</li>
                    <li class="list-item">3. Plus any suggestions you might offer</li>

                </ol>

                <h5>Project structure:</h5>
                <ol>
                    <li class="list-item">Components: app\Livewire\</li>
                    <li class="list-item">Controllers: app\Http\Controllers\</li>
                    <li class="list-item">Models: app\Models\</li>
                    <li>Views:
                        <ul>
                            <li class="list-item">Layout: resources\views\layouts\app.blade.php</li>
                            <li class="list-item">Livewire Views: resources\views\livewire\</li>
                            <li class="list-item">Pages: resources\views\pages\</li>
                            <li class="list-item">Includes: resources\views\includes\</li>
                        </ul>
                    </li>

                </ol>

            </div>
        </div>
    </div>
