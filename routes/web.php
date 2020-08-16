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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => '/panel','namespace' => 'Admin','middleware' => 'admin'], function () {
Route::get('/', 'AdminController@index')->name('home');
Route::post('/update', 'AdminController@update')->name('home');
Route::get('/password', 'AdminController@editPassword')->name('password');
Route::post('/password', 'AdminController@updatePassword')->name('password');
});

Route::group(['namespace' => 'Front'], function () {

    /*_____________________________________ Main Page ___________________________________________________*/

    Route::get('/', [ 'uses' => 'HomeController@index'])->name('productsPage');

});

/*________________________________________validation__________________________________________________*/

Route::post('/validation/username', 'Ajax\validationController@validateUserName');
