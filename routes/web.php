<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::group(['middleware' => ['localization']], function () {
    Route::resource('posts', 'PostController');
    Route::resource('tags', 'TagController');
});
Route::get('change-languages/{language}', 'PostController@changeLanguage')->name('change-languages');

Auth::routes();

