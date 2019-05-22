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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [

	'as'=>'login',
  'uses' =>'AuthController@getLogin',
]);
Route::post('/login', [
	'as' =>'post.login',
  'uses' =>'AuthController@postLogin',
]);

Route::get('/home', [
	'as' =>'get.home',
  'uses' =>'DeshboardController@getHome',
]);

Route::get('/book', [
	'as' =>'get.book',
  'uses' =>'BookController@getBook',
]);

Route::post('/book', [
	'as' =>'book.post',
  'uses' =>'BookController@store',
]);

Route::get('/books', [
	'as' =>'book.list',
  'uses' =>'BookController@getBooks',
]);















