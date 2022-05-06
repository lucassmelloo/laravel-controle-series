<?php

use App\Http\Controllers\GithubSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/series',[SeriesController::class, 'index'] );

Route::get('/series/criar',[SeriesController::class, 'create'] );

Route::get('/githubsearch',[GithubSearch::class, 'index']);