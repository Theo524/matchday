<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

// For now, the homepage sends visitors to the clubs page.
Route::get('/', function () {
    return redirect('/clubs');
});

// Display all clubs.
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');

// Display one individual club.
Route::get('/clubs/{club}', [ClubController::class, 'show'])->name('clubs.show');