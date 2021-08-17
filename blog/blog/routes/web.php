<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/articles/more', function (){
//    return redirect()->route('article.detail');
//});
//
//Route::get('/articles/detail', function (){
//   return "hello";
//})->name('article.detail');

Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/detail/{id}','ArticleController@detail');

Route::get('/articles/add','ArticleController@add');
Route::post('/articles/add','ArticleController@create');
Route::get('/articles/delete/{id}', 'ArticleController@delete');

Route::post('/comments/add','CommentController@create');
Route::get('/comments/delete/{id}', 'CommentController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
