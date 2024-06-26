<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\MunkafelvevoController; 
use App\Http\Controllers\SzereloController; 

Route::get('/home', function () { return view('home');}) -> name('home');
Route::get('/munkalap', function () { return view('munkalap.index');}) -> name('munkalap.index');
Route::get('/munkalap/create', function () { return view('munkalap.create');}) -> name('munkalap.create');

Route::get('/login', [AuthManager::class, 'login']) ->name('login');
Route::post('/login', [AuthManager::class, 'loginPost']) ->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration']) ->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost']) ->name('registration.post');
Route::get('/logout', [AuthManager::class,'logout']) ->name('logout');

