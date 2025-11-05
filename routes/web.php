<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/where', 'where')->name('where');
Route::view('/catalog', 'catalog')->name('catalog');
Route::view('/register', 'register')->name('register');
Route::view('/login','login')->name('login');
Route::view('/cart','cart')->name('cart');