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

// HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// COMICS
Route::get('/comics', function () {

    $comics = config('comics');
    //dump($comics);

    return view('comics', ['cards' => $comics]);
})->name('comics');

// NEWS
Route::get('/news', function() {
    return view('news');
})->name('news');

// ABOUT
Route::get('/about', function() {
    return view('about');
})->name('about');
