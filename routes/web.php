<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('clubs', [LandingController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingController::class, 'stadiums'])->name('landing.stadiums');
Route::resource('/', LandingController::class);