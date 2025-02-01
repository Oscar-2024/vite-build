<?php

use Illuminate\Support\Facades\Route;


Route::get('/shop', 'ShopController@index')->name('shop.index');