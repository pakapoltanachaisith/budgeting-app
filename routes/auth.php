<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
  Route::get('login', [SessionController::class, 'create'])->name('login');
  Route::post('login', [SessionController::class, 'store']);
});

Route::post('logout', [SessionController::class, 'destroy'])
  ->name('logout')
  ->middleware('auth');