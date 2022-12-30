<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
    
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        //Lai reģistrēšana būtu pieejama tikai reģistrētiem lietotājiem/adminam
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');


    });
});



//need to write the full path to the controller and the function
//Page routes
Route::get(uri:'/gallery', action:'App\Http\Controllers\RouteController@galleryPage');
Route::get(uri:'/contact', action:'App\Http\Controllers\RouteController@contactPage');
Route::get(uri:'/about', action:'App\Http\Controllers\RouteController@aboutPage');
Route::get(uri:'/service', action:'App\Http\Controllers\RouteController@servicePage');

//adding new photo type
Route::get(uri:'/gallery/createPhotoType', action:'App\Http\Controllers\GalleryController@createPhotoType');
//adding new photo
Route::controller(ImageController::class)->group(function(){
    // Route::get('image-upload', 'index');
    Route::post('/gallery', 'store')->name('image.store');
    Route::delete("delete", [ImageController::class, "deleteImage"])->name("delete");
});


//languages
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);