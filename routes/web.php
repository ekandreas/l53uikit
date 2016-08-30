<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontpage');
});

Route::get('/portfolio', function () {
	return view('portfolio');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/post', function () {
	return view('post');
});

Route::get('/documentation', function () {
	return view('documentation');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/login', function () {
	return view('login');
});
