<?php
Route::get('/', 'WelcomeController@index');
Route::get('/portfolio/{portfolio}', 'WelcomeController@portfolio');
Route::get('/blog', 'WelcomeController@blog');
Route::get('/blog/{blog}', 'WelcomeController@blogSingle');
Route::get('/about', 'WelcomeController@about');
Route::get('/contact', 'WelcomeController@contact');
Route::post('/mail-contact', 'WelcomeController@contactPost');
Auth::routes();