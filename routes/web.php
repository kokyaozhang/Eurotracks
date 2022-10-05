<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use \App\Http\Livewire\Fieldequips;
use Illuminate\Http\Request;
use Laravel\Jetstream\Http\Controllers\Inertia\TeamController;


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






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(callback: function () {
    Route::get('/dashboard', function () {
        return view('dashboard');

    })->name('dashboard');
    Route::get('posts', Posts::class)->name('posts');

    Route::get('fieldequips/assets', Fieldequips::class)->name('assetequips');
    Route::get('report', \App\Http\Livewire\Reports::class)->name('report');
    Route::get('/general/1', Fieldequips::class)->name('fieldassets');
    Route::get('/general/2', Fieldequips::class)->name('fieldequips');
    Route::get('/general/3', Fieldequips::class)->name('fieldemodel');
    Route::get('/general/4', Fieldequips::class)->name('labassets');
    Route::get('/general/5', Fieldequips::class)->name('labequips');
    Route::get('/general/6', Fieldequips::class)->name('labmodel');
    Route::get('/general/7', Fieldequips::class)->name('labassetsc');
    Route::get('/general/8', Fieldequips::class)->name('labequipsc');
    Route::get('/general/9', Fieldequips::class)->name('labmodelc');
    Route::get('/users', \App\Http\Livewire\Teamusers::class)->name('users');
    Route::post('/idd',[\App\Http\Livewire\Fieldequips::class,'fimport']);
    Route::post('fieldequips-import',[Fieldequips::class.'import'])->name('fieldequips.import');
    Route::get('export/',[\App\Http\Livewire\Fieldequips::class,'export'])->name('export');
    Route::get('/userList',[\App\Http\Controllers\StudentController::class,'userList']);
    Route::get('/urlFetch/{key}', [\App\Http\Controllers\StudentController::class,'userFetch']);
    Route::get('/index', function () {
        return view('index');
    });
    Route::get('/', function () {
        return view('auth.login');
    })->name('/');

    Route::get("/search",[Fieldequips::class,'search']);


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


Route::resource('photo', \App\Http\Controllers\PhotoController::class)->middleware('auth');
