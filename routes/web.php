<?php

Route::get('/', 'PagesController@home');
Route::get('/registration', 'RegistrationController@create')->name('register_path');

Route::post('/registration', 'RegistrationController@store');
