<?php

use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'home'])->name('home');
Route::get('/fotos', [MenuController::class, 'fotos'])->name('fotos');
Route::get('/contacto', [MenuController::class, 'contacto'])->name('contacto');
