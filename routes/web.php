<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use \App\Http\Livewire\Fieldequips;
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

Route::get('/', [\App\Http\Controllers\StudentController::class,'index']);
Route::post('/import',[\App\Http\Controllers\StudentController::class,'import']);

Route::post('/idd',[\App\Http\Livewire\Fieldequips::class,'fimport']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(callback: function () {
    Route::get('/dashboard', function () {
        return view('dashboard');

    })->name('dashboard');
    Route::get('posts', Posts::class)->name('posts');
    Route::get('fieldequips', Fieldequips::class)->name('fieldequips');
    Route::get('report', \App\Http\Livewire\Reports::class)->name('report');

    Route::post('fieldequips-import',[Fieldequips::class.'import'])->name('fieldequips.import');
    Route::get('export/',[\App\Http\Livewire\Fieldequips::class,'export'])->name('export');



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
