<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;


Route::get('/filmes', [FilmeController::class, 'getOnlyMovies']);
Route::get('/filmes/all', [FilmeController::class, 'getAllMoviesAndInfos']);
Route::get('/filmes/search="{name}"', [FilmeController::class, 'getMoviesByName']);

Route::get('/generos', [GeneroController::class, 'getOnlyGenres']);
Route::get('/generos/{genres}/filmes', [GeneroController::class, 'getMoviesByGenre']);

Route::get('/tags', [TagController::class, 'getOnlyTags']);
Route::get('/tags/{tags}/filmes', [TagController::class, 'getMoviesByTag']);

Route::get('/account/{id}', [UserController::class, 'getUser']);
Route::get('/account/{id}/fav', [UserController::class, 'getUserFavorites']);

