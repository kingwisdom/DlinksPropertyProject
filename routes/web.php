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

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/my-area', 'AreaController@my_area')->name('area.my_area');
        Route::get('/admin', 'AreaController@admin')->name('area.admin');
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
