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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//main page
Route::get('/','PostsController@index')->name('main');



//create post
Route::get('/posts/create','PostsController@create')->name('create posts');
Route::post('/posts/create','PostsController@store')->name('create');//save the post

//show the posts
Route::get('/{post}','PostsController@show');



