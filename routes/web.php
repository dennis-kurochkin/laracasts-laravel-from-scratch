<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/contact', 'ContactController@show')->name('contact.show');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
