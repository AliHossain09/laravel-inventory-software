<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('auth.login'); })->name('home');
Route::get('/registration', function () { return view('auth.registration'); });
