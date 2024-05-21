<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;


Route::get('/filmes', [FilmeController::class, 'getAllMovies']);
Route::get('/generos', [GeneroController::class, 'getAllGenres']);
