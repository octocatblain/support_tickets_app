@section('title')
    {{ $title }}
@endsection

<div class="d-flex justify-content-center">
    <div class="card m-2 p-2 col-5 " style="background-color: rgba(179, 174, 174, 0.100) !important">
        <div>
            <h5 class="text-center">SignUp To Get Started</h5>
        </div>
        <form class=" m-2" wire:submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your name"
                    wire:model="form.name">
                @error('form.name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com"
                    wire:model="form.email">
                @error('form.email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password"
                    wire:model="form.password">
                @error('form.password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="rememberPassword">Confirm Password</label>
                <input type="password" class="form-control" id="rememberPassword" placeholder="Confirm your password"
                    wire:model="form.password_confirmation">
                @error('form.password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-content-center">
                <input type="submit" value="Register >" class="btn btn-primary w-100">
            </div>
        </form>
    </div>
</div>
