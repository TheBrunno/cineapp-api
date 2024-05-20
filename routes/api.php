<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmeController;

Route::get('/filmes', [FilmeController::class, 'getAllMovies']);
