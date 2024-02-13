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

Route::get('/games', function () {
    $games = config('games');
    return view('games', compact('games'));
})->name('games');

Route::get('/comics/{param}', function ($id) {
    $comics = config('comics');

    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }

    return view('detail_comic', compact('comic'));
})->name('detail-comic');
