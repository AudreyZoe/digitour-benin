<?php

use App\Http\Controllers\SiteTouristiqueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', [SiteTouristiqueController::class, 'index'])->name('index');
