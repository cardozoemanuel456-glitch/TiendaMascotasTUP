<?php

use App\Http\Controllers\PetController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloWebController;

//Route::get('/articulos', [ArticuloWebController::class, 'index']);

Route::get('/mascotas', [PetController::class, 'index'])->name('pets.index'); 
Route::get('/mascotas/crear', [PetController::class, 'create'])->name('pets.create'); 
Route::post('/mascotas', [PetController::class, 'store'])->name('pets.store');