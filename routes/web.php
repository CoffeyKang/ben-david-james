<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/exhibitors', function () {
    return view('exhibitors');
});

Route::get('/presentors', function () {
    return view('presentors');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/register', [RegisterController::class, 'register']);
