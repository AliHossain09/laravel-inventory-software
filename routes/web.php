<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () { return view( 'auth.login' ); })->name('home');
Route::post('/loginStore', [ AuthController::class, 'loginStore' ] )->name('login.store');

Route::get('/registration', function () { return view( 'auth.registration' ); })->name('registration.show');
Route::post('/registrationStore', [ AuthController::class, 'registrationStore' ] )->name('registration.store');

Route::get('/adminDashboard', function () { return view( 'dashboard.adminDashboard' ); })->name('admin.dashboard');
// Route::get('/clientDashboard', function () { return view( 'dashboard.clientDashboard', [ 'user'=> User::all() ] ); })->name('client.dashboard');

Route::get('/clientDashboard', [ AuthController::class, 'clientDashboard' ])->name('client.dashboard');
Route::get('/logout', [ AuthController::class, 'logout' ])->name('user.logout');

