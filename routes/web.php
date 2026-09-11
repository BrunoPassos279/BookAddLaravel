<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book/create', [BookController::class, 'create']); 
Route::post('/book', [BookController::class, 'store']); 
Route::get('/book', [BookController::class, 'index']); 

Route::delete('/book/{id}', [BookController::class, 'destroy']);
Route::get('/book/{id}/edit', [BookController::class, 'edit']);
Route::put('/book/{id}', [BookController::class, 'update']);
