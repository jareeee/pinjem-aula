<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentCallbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main.index',[
        'title' => 'Home',
    ]);
})->middleware('auth');

Route::get('/booking', [BookingController::class, 'show'])->name('booking')->middleware('auth');
Route::post('/booking', [BookingController::class, 'create'])->name('booking-post')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/schedule', [DashboardController::class, 'show_schedule'])->name('schedule-dashboard')->middleware('auth');
Route::get('/dashboard/payment', [DashboardController::class, 'show_payment'])->name('payment-dashboard')->middleware('auth');
Route::resource('/dashboard/admin', AdminController::class);

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive'])->name('payment-callback');