<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');

    })->name('dashboard');
    Route::get('posts', Posts::class)->name('posts');
    Route::get('fieldequips', \App\Http\Livewire\Fieldequips::class)->name('fieldequips');
    Route::get('/report', function () {
        return view('livewire.report');

    })->name('report');
});

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('posts', function () {
        return view(Posts::class);
    })->name('posts');
});*/

Route::post('posts', Posts::class)->middleware('auth');
Route::resource('photo', \App\Http\Controllers\PhotoController::class)->middleware('auth');
