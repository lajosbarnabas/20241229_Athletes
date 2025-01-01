<?php

use App\Http\Controllers\AthleteController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'athletes');
Route::get('/athletes/search', [AthleteController::class, 'search'])->name('athletes.search');
Route::post('/athletes/search', [AthleteController::class, 'processSearch'])->name('athletes.process.search');
Route::resource('athletes', AthleteController::class);
