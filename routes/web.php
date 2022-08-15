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

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/our-journey', function () {
    return view('our-journey');
})->name('our-journey');

Route::get('/company-profile', function () {
    return view('company-profile');
})->name('company-profile');

Route::get('/mission-and-vission', function () {
    return view('mission-and-vission');
})->name('mission-and-vission');

Route::get('/corporate-video', function () {
    return view('corporate-video');
})->name('corporate-video');

Route::get('/quality', function () {
    return view('quality');
})->name('quality');

Route::get('/career', function () {
    return view('career');
})->name('career');

