<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
Route::get('/', function(){
    return redirect('/series');
});


Route::resource('/series', SeriesController::class)
    ->except('show');

/* Route::post('series/destroy/{serie}', [SeriesController::class, 'destroy'])
    ->name('series.destroy'); */

