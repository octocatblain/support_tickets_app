@extends('livewire.layouts.app')

@section('title', $title)

<div class="container">
    <div class="row">
        <div class="col-6">
            @section('content')
                {{ $name }}
            @endsection
        </div>
    </div>
</div>
