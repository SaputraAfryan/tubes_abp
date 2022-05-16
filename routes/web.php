<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PenginapanController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'showHome');
    Route::get('/signin', 'showIn');
    Route::get('/signup', 'showOut');
    Route::get('/about', 'showAbout');
});

Route::controller(PariwisataController::class)->group(function () {
    Route::get('/pariwisata', 'index');
    Route::get('/pariwisata/{id}', 'show');
});

Route::controller(PenginapanController::class)->group(function () {
    Route::get('/penginapan', 'index');
    Route::get('/penginapan/{id}', 'show');
});

// Route::get('/nearest', function () {
//     return view('nearest');
// });
