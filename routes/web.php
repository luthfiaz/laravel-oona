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

Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
{
    // implement your reset password route here!
}]);

// Route::get('/', function () {
//     return view('image');
// });

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/table', 'ImageController@index');

Route::get('/form', 'ImageController@form');

Route::get('/image/select/{id}', 'ImageController@select');

Route::get('/image/edit/{id}', 'ImageController@edit');

Route::get('/image/delete/{id}', 'ImageController@delete');

Route::post('/image/add', 'ImageController@create');

Route::post('/image/update', 'ImageController@update');
