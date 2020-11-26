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

Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::group(['namespace' => 'Web'], function () {
        //index routes
        Route::get('/', 'IndexController@index');
        Route::get('get-models', 'IndexController@getModels');
        Route::post('repaired-car', 'IndexController@store')->name('repaired-car');
        //services route
        Route::get('services', 'ServiceController@index');
        //galleries route
        Route::get('galleries', 'GalleryController@index');
        //testimonials route
        Route::get('testimonials', 'TestimonialController@index');
        //contacts routes
        Route::get('contact-us', 'ContactController@index');
        Route::post('contact-us', 'ContactController@store')->name('contact-us');
        //about route
        Route::get('about', 'AboutController@index');
    });
});
