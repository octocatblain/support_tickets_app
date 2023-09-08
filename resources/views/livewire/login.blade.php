@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card m-2 p-2 col-5">
            <div>
                <h5 class="text-center">Login Time</h5>
            </div>
            <form class=" m-2" wire:submit.prevent="submit">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com"
                        wire:model="form.email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        wire:model="form.password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberPassword">
                    <label class="form-check-label" for="rememberPassword">Remember Password</label>
                </div>
                <div class="flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
