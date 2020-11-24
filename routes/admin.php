<?php

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

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    dd('cleared');
});

Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//        Route::middleware('auth', function () {
            //contacts route
            Route::resource('contacts', 'ContactController');
            //years route
            Route::resource('years', 'YearController');
            //brands route
            Route::resource('brands', 'BrandController');
            //models route
            Route::resource('models', 'ModelController');
            //testimonials route
            Route::resource('testimonials', 'TestimonialController');
            //sliders route
            Route::resource('sliders', 'SliderController');
            //services route
            Route::resource('services', 'ServiceController');
            //repaired cars route
            Route::resource('repaired-cars', 'RepairedCarController');
            Route::put('repaired-car-status/{id}', 'RepairedCarStatusController@update')->name('repaired-car-status');
            //settings route
            Route::get('settings', 'SettingController@index');
            Route::put('update-settings', 'SettingController@update');
            //static pages route
            Route::get('static-pages', 'StaticPageController@index');
            Route::put('update-static-pages', 'StaticPageController@update');

        });
//    });
});



