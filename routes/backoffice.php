<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', 'Auth\LoginController@index')->name('auth.login');