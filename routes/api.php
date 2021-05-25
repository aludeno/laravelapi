<?php


use Illuminate\Support\Facades\Route;

Route::post('login','LoginController@authenticate');

Route::get('user/index','UserController@index');
