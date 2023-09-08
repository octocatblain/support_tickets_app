<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Livewire\Index;
use App\Livewire\Home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', Index::class); = doesn't work

Route::get('/', [PagesController::class, 'index']);
Route::get('/login', [PagesController::class, 'login']);
// Route::get('/', 'App\Http\Controllers\PagesController@index');

// Route::get('/login', [PagesController::class, 'login']);
// Route::get('/register', [PagesController::class, 'register']);
// Route::get('/', [PagesController::class, 'index']);
