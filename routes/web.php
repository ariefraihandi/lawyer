<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\Portal\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',                     [PengacaraController::class, 'showIndex'])->name('showIndex');
Route::get('/search',              [PengacaraController::class, 'search'])->name('search');

Route::get('/login',                     [AuthController::class, 'showLogin'])->name('showLogin');
