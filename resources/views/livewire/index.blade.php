@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-2">
                @livewire('tickets') </div>
            <div class="col-6 p-2">
                @livewire('comments') </div>
        </div>
    </div>
@endsection
