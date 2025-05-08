<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientDashboardController;

Route::get('/', function () { return view( 'auth.login' ); })->name('home');
Route::post('/loginStore', [ AuthController::class, 'loginStore' ] )->name('login.store');

Route::get('/registration', function () { return view( 'auth.registration' ); })->name('registration.show');
Route::post('/registrationStore', [ AuthController::class, 'registrationStore' ] )->name('registration.store');
Route::get('/logout', [ AuthController::class, 'logout' ])->name('user.logout');

Route::get('/adminDashboard', [ AdminDashboardController::class, 'adminDashboard' ])->name('admin.dashboard');
Route::get('/clientDashboard', [ ClientDashboardController::class, 'clientDashboard' ])->name('client.dashboard');



Route::get('/addProduct', [ ProductController::class, 'addProduct' ])->name('client.addProduct');

