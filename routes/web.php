<?php

use App\Http\Controllers\ListOfFilms;

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

    return view('welcome');
})->name('initial');



Route::get('/catalogo',[ListOfFilms::class,'showFilmList'])->name('ctalogo');



Route::get('/def{id}', [ListOfFilms::class, 'userFilm'])->name('def');
