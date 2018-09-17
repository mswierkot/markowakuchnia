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

Route::resource('admin', 'ArticleController');
Route::resource('articles', 'HomeController');
Auth::routes();
 
Route::get('/', 'ArticleController@publicHomePage');
Route::get('sniadania', 'ArticleController@publicHomePageSniadania');
Route::get('daniaglowne', 'ArticleController@publicHomePageDaniaglowne');
Route::get('desery', 'ArticleController@publicHomePageDesery');
Route::get('pozostale', 'ArticleController@publicHomePagePozostale');

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 
 