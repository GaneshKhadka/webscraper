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
Route::get('scraper',['as'=>'index','uses'=>'ScraperController@index']);
Route::get('scrapers',['as'=>'scrapers','uses'=>'ScraperController@store']);
Route::get('saveData',['as'=>'saveData','uses'=>'ScraperController@saveData']);


Route::post('url',['as'=>'url','uses'=>'UrlController@store']);

