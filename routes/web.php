<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/','components.login');
Route::view('/appointment/booking','components.booking.booking');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL ROUTES
|--------------------------------------------------------------------------
*/

Route::view('/admin/dashboard','components.dashboard');
Route::view('/admin/appointment-list','components.booking.booking-list');
Route::view('/admin/appointment-list/detail','components.booking.booking-detail');
