<?php
Route::get('/', 'PagesController@index')->name('index');

Route::get('signup', 'UsersController@create')->name('signup');