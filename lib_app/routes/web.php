<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ImageUploadController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); 

Route::get('/accaunt', [App\Http\Controllers\AccauntController::class, 'accaunt'])->name('accaunt');

Route::get('/accaunt', [App\Http\Controllers\AccauntController::class, 'getBooks'])->name('accaunt');


Route::group(['prefix'=>'books', 'as'=>'books.'],function () {

 Route::post('/create', [BookController::class, 'create'])->name('create');

 Route::get('/create', [BookController::class, 'show'])->name('show');

 Route::any('/update/{id}', [BookController::class, 'update'])->name('update');
 
 Route::delete('/{id}/delete', [BookController::class, 'delete'])->name('delete');
});

Route::get('/image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');

Route::post('/image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::post('/ckeditor/upload', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('ckeditor.image-upload');



Route::get('/libreadbook', [App\Http\Controllers\lib_read_bookController::class, 'libReadBook'])->name('libreadbook');

Route::get('/edit', [App\Http\Controllers\editController::class, 'edit'])->name('edit');
