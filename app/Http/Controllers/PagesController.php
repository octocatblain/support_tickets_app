<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('livewire.index');
    }
    public function login()
    {
        return view('livewire.login');
    }

    public function register()
    {
        return view('livewire.register');
    }

    public function about()
    {
        return view('livewire.about');
    }
}