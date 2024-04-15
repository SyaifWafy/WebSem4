<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LuppassController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [IndexController::class, 'showIndex'])->name('index');

Route::get('/register', [RegisterController::class, 'showRegistrationFormCus'])->name('registercus');
Route::post('/tambah-customer', [RegisterController::class, 'tambahCustomer'])->name('tambahCustomer');

Route::get('/logincustomer', [LoginController::class, 'showLoginFormCus'])->name('indexcus');
Route::get('/loginadmin', [LoginController::class, 'showLoginFormAdmin'])->name('indexadmin');
Route::post('/konfirmasilogincustomer', [LoginController::class, 'loginCus'])->name('loginCus');
Route::post('/konfirmasiloginadmin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');

Route::get('/admin/dashboard', [DashboardController::class, 'showDashboardAdmin'])->name('dashboardadmin');
Route::get('/customer/dashboard', [DashboardController::class, 'showDashboardCus'])->name('dashboardcustomer');

Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::post('/logoutcus', [DashboardController::class, 'logoutcus'])->name('logoutcus');
Route::get('/logoutcus/confirm', [DashboardController::class, 'confirmLogoutCus'])->name('confirmlogoutcus');
Route::post('/logoutadmin', [DashboardController::class, 'logoutadmin'])->name('logoutadmin');
Route::get('/logoutadmin/confirm', [DashboardController::class, 'confirmLogoutAdmin'])->name('confirmlogoutadmin');

Route::get('/lupapasswordcustomer', [LuppassController::class, 'showLuppassFormCus'])->name('luppasscus');
Route::post('/lupapasswordcustomer', [LuppassController::class, 'lupaPasswordCus'])->name('customer.lupaPasswordCus');
Route::get('/lupapasswordadmin', [LuppassController::class, 'showLuppassFormAdmin'])->name('luppassadmin');
Route::post('/lupapasswordadmin', [LuppassController::class, 'lupaPasswordAdmin'])->name('admin.lupaPasswordAdmin');

Route::get('/admin/wisata', [AdminController::class, 'showWisataAdmin'])->name('wisataadmin');
Route::get('/admin/form-wisata', [AdminController::class, 'showFormWisataAdmin'])->name('formwisataadmin');
Route::post('/admin/insert-wisata', [AdminController::class, 'insertWisata'])->name('tambahwisata');
Route::get('/edit-wisata-admin/{kd_wisata}', [AdminController::class, 'showEditWisata'])->name('editWisataAdmin');
Route::put('/update-wisata-admin/{kd_wisata}', [AdminController::class, 'updateWisata'])->name('updateWisataAdmin');
Route::delete('/delete-wisata-admin/{kd_wisata}', [AdminController::class, 'deleteWisata'])->name('deleteWisataAdmin');
Route::get('/detail-wisata/{id}', [AdminController::class, 'showDetailWisataAdmin'])->name('detailWisataAdmin');

Route::get('/admin/event', [AdminController::class, 'showEventAdmin'])->name('eventadmin');
Route::get('/admin/form-event', [AdminController::class, 'showFormEventAdmin'])->name('formeventadmin');
Route::post('/admin/insert-event', [AdminController::class, 'insertEvent'])->name('tambahevent');
Route::get('/detail-event/{id}', [AdminController::class, 'showDetailEventAdmin'])->name('detailEventAdmin');
Route::get('/edit-event-admin/{kd_event}', [AdminController::class, 'showEditEvent'])->name('editEventAdmin');
Route::put('/update-event-admin/{kd_event}', [AdminController::class, 'updateEvent'])->name('updateEventAdmin');
Route::delete('/delete-event-admin/{kd_event}', [AdminController::class, 'deleteEvent'])->name('deleteEventAdmin');



Route::get('/admin/pengaduan', [AdminController::class, 'showPengaduanAdmin'])->name('pengaduanadmin');

