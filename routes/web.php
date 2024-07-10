<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();
//Dashboard
Route::get('/home', [DashboardController::class, 'home'])->name('home');
//profile 
Route::get('/profile_edit', [DashboardController::class, 'profile_edit'])->name('profile.edit');
//profile update
Route::post('/profile_update', [DashboardController::class, 'profile_update'])->name('profile.update');