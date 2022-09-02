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


Route::get('/', 'Frontend\IndexController@home')->name('home');
Route::get('/about-us', 'Frontend\IndexController@aboutUs')->name('about-us');
Route::get('/contact-us', 'Frontend\IndexController@contactUs')->name('contact-us');
Route::get('/products', 'Frontend\IndexController@products')->name('products');
Route::get('/our-journey', 'Frontend\IndexController@ourJourney')->name('our-journey');
Route::get('/company-profile', 'Frontend\IndexController@companyProfile')->name('company-profile');
Route::get('/mission-and-vission', 'Frontend\IndexController@missionAndvission')->name('mission-and-vission');
Route::get('/corporate-video', 'Frontend\IndexController@corporateVideo')->name('corporate-video');
Route::get('/quality', 'Frontend\IndexController@quality')->name('quality');
Route::get('/career', 'Frontend\IndexController@career')->name('career');

Route::get('/changeLang', 'Frontend\IndexController@changeLang')->name('changeChange');


Route::post('contact-us', 'Frontend\IndexController@sendContactUsMail')->name('contact.us.store');
Route::post('carrier', 'Frontend\IndexController@sendCarrierMail')->name('carrier.store');
