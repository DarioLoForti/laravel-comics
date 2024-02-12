<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/movies', function () {
    $movies = config('movies');
    return view('movies', compact('movies'));
})->name('movies');

Route::get('/series', function () {
    $series = config('series');
    return view('series', compact('series'));
})->name('series');
