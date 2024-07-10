<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [DashboardController::class, 'home'])->name('home');