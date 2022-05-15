<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/pariwisata', function(){
    return view('pariwisata');
});

Route::get('/penginapan', function () {
    return view('penginapan');
});

Route::get('/nearest', function () {
    return view('nearest');
});
