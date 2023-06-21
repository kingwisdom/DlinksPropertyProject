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

// Route::get('/', function () {
//     return view('home');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/products', 'PagesController@products')->name('pages.products');
    Route::get('/service', 'PagesController@service')->name('pages.service');
    Route::get('/team', 'PagesController@team')->name('pages.team');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/testimonial', 'PagesController@testimonial')->name('pages.testimonial');
});
