<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () { return view( 'auth.login' ); })->name('home');

Route::get('/registration', function () { return view( 'auth.registration' ); })->name('registration.show');
Route::post('/registrationStore', [ AuthController::class, 'registrationStore' ] )->name('registration.store');

