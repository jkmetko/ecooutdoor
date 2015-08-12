<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\App;

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/*---- AUTH ----*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*---- ADMIN ----*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'AdminController@logout']);

    Route::post('/onas/update', ['as' => 'update_onas', 'uses' => 'AdminController@update_onas']);
    Route::get('/delete_member/{id}', ['as' => 'delete_member', 'uses' => 'AdminController@delete_member']);
    Route::get('/delete_service/{id}', ['as' => 'delete_member', 'uses' => 'AdminController@delete_service']);
    Route::post('/services/update', ['as' => 'delete_member', 'uses' => 'AdminController@services_update']);
});