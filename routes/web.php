<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// In your routes/web.php
/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'components.login')->name('login.page');

Route::post('/login', [AuthController::class, 'login'])->name('login');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::view('/appointment/booking', 'components.booking.booking')->name('appointment.booking');
Route::middleware('auth')->group(function () {
    Route::view('/admin/dashboard', 'components.dashboard')->name('admin.dashboard');



    Route::view('/admin/appointment-list', 'components.booking.booking-list')->name('admin.appointment.list');
    Route::view('/admin/appointment-list/detail', 'components.booking.booking-detail')->name('admin.appointment.detail');
});
