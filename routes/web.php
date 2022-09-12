<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Equipcontroller;
use App\Http\Controllers\usercontroller;
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

//Route::Post("register",[Equipcontroller::CLASS,'postData']);
//Route::view("login","register");
Route::get("users",[usercontroller::CLASS,'index']);

Route::get("users",[usercontroller::CLASS,'index']);

Route::get("equip",[Equipcontroller::CLASS,'postData']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('posts', Posts::class)->middleware('auth');
