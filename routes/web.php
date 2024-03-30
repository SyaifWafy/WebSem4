<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'showRegistrationFormCus'])->name('registercus');
Route::post('/tambah-customer', [RegisterController::class, 'tambahCustomer'])->name('tambahCustomer');

Route::get('/logincustomer', [LoginController::class, 'showLoginFormCus'])->name('indexcus');
Route::get('/loginadmin', [LoginController::class, 'showLoginFormAdmin'])->name('indexadmin');
Route::post('/konfirmasilogincustomer', [LoginController::class, 'loginCus'])->name('loginCus');
Route::post('/konfirmasiloginadmin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [DashboardController::class, 'showDashboardAdmin'])->name('dashboardadmin');
Route::get('/customer/dashboard', [DashboardController::class, 'showDashboardCus'])->name('dashboardcustomer');
Route::post('/logoutcus', [DashboardController::class, 'logoutcus'])->name('logoutcus');
Route::get('/logoutcus/confirm', [DashboardController::class, 'confirmLogoutCus'])->name('confirmlogoutcus');
Route::post('/logoutadmin', [DashboardController::class, 'logoutadmin'])->name('logoutadmin');
Route::get('/logoutadmin/confirm', [DashboardController::class, 'confirmLogoutAdmin'])->name('confirmlogoutadmin');

