<?php

use Illuminate\Support\Facades\Auth;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/food', [App\Http\Controllers\HomeController::class, 'food'])->name('food');
Route::get('/sports', [App\Http\Controllers\HomeController::class, 'sports'])->name('sports');
Route::get('/Healthy_Guide', [App\Http\Controllers\HomeController::class, 'Healthy_Guide'])->name('Healthy_Guide');
Route::get('/keep_weight', [App\Http\Controllers\HomeController::class, 'keep_weight'])->name('keep_weight');
Route::get('/Healthy_Food', [App\Http\Controllers\HomeController::class, 'Healthy_Food'])->name('Healthy_Food');
Route::get('/restaurants', [App\Http\Controllers\HomeController::class, 'restaurants'])->name('restaurants');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
//Route::get('/Diet_Plans', [App\Http\Controllers\HomeController::class, 'Diet_Plans'])->name('Diet_Plans');
Route::get('/404', [App\Http\Controllers\HomeController::class, 'not_found'])->name('404');
Route::get('/gain_weight', [App\Http\Controllers\HomeController::class, 'gain_weight'])->name('gain_weight');
Route::get('/bmi', [App\Http\Controllers\HomeController::class, 'bmi'])->name('bmi');
Route::get('/diet', [App\Http\Controllers\HomeController::class, 'diet'])->name('diet');
// Route::get('/search/{string}', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::post('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
