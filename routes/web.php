<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PagesController::class], 'home')->name('home');
Route::get('curso/{course:slug}', [PageController::class], 'courses')->name('course');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
