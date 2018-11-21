<?php
Route::get('/', 'PagesController@index')->name('index');

Route::get('signup', 'UsersController@create')->name('signup');

// 用户资源
Route::resource('users', 'UsersController');

// 登录
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

