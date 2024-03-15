<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/tambah-customer', [RegisterController::class, 'tambahCustomer'])->name('tambahCustomer');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('index');
Route::post('/login', [LoginController::class, 'loginCus'])->name('loginCus');
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::post('/admin/dashboard', [DashboardController::class, 'showDashboardAdmin'])->name('dashboardadmin');
Route::post('/customer/dashboard', [DashboardController::class, 'showDashboardCus'])->name('dashboardcustomer');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::get('/logout/confirm', [DashboardController::class, 'confirmLogout'])->name('confirmlogout');
