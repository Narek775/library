<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/createbook', [App\Http\Controllers\create_bookController::class, 'createBook'])->name('createbook');

Route::get('/libreadbook', [App\Http\Controllers\lib_read_bookController::class, 'libReadBook'])->name('libreadbook');

Route::get('/accaunt', [App\Http\Controllers\accauntController::class, 'accaunt'])->name('accaunt');

Route::get('/edit', [App\Http\Controllers\editController::class, 'edit'])->name('edit');

Route::get('/editbook', [App\Http\Controllers\editBookController::class, 'editBook'])->name('editbook');