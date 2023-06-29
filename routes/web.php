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
        Route::post('/post-inspection', 'AreaController@create_inspection')->name('create_inpec');


        //admin part
        Route::get('/create_product', 'AdminController@create')->name('admin.create');
        Route::post('/create_product', 'AdminController@create_product')->name('admin.create_product');
        Route::delete('/delete-product', 'AdminController@delete')->name('admin.delete');
        Route::get('/all_users', 'AdminController@Users')->name('admin.users');
        Route::get('/all_visit', 'AdminController@visits')->name('admin.visits');
        Route::get('/inspects', 'AdminController@inspects')->name('admin.inspect');
        Route::get('/admin', 'AreaController@admin')->name('area.admin');
        Route::get('/paynow/{id}', 'AreaController@paynow')->name('area.pay');
        Route::put('/update-inspection/{id}', 'AdminController@update_inspection')->name('update_inspect');
        //logout
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
