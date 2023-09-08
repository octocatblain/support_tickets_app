<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand text-bold text-white" href="/">Support Tickets App</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link text-white" wire:navigate href="/">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" wire:navigate href="/about">About
                    </a>
                </li>

            </ul>

            {{-- navbar right side --}}
            <ul class="navbar-nav navbar-right mr-3">
                <li class="nav-item "><a class="nav-link text-white" wire:navigate href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link text-white" wire:navigate href="/register">Register</a></li>

            </ul>

        </div>
    </div>
</nav>
