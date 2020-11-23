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
});

Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        Route::middleware('auth', function () {
            //contacts route
            Route::resource('contacts', 'ContactController');
            //years route
            Route::resource('years', 'YearController');
            //brands route
            Route::resource('brands', 'BrandController');
            //models route
            Route::resource('models', 'ModelController');

        });
    });
});



