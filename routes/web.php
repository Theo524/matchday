<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

// Main homepage.
Route::view('/', 'home')->name('home');

// Club pages.
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');