<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticoliController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('articoli', [ArticoliController::class, 'articoli'])->name('articoli');

Route::get('articoli/dettaglioArticoli/{id}', [ArticoliController::class, 'dettaglio'])->name('dettaglioArticoli');