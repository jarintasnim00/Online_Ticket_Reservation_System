<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/shohoz', function () {
    return view('shohoz');
});

Route::post('/booking/bus/pay-now', [App\Http\Controllers\BusController::class, 'payment_now']);

Route::post('/booking/bus/add-payment', [App\Http\Controllers\BusController::class, 'add_payment'])->name('payment.post');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('user.bookingbus');
})->name('bokking.get');

Route::get('/booking/{data_list}/{bus_id}/{boarding_point}/{demo_user_id}', [App\Http\Controllers\BusController::class, 'after_booking'])->name('booking.get');

Route::post('/booking', [App\Http\Controllers\BusController::class, 'add_data'])->name('booking.post');;

Route::post('/buses/search', [App\Http\Controllers\BusController::class, 'booked_seat']);

Route::get('/bus', [App\Http\Controllers\BusController::class, 'index']);

Route::get('/buses/search', [App\Http\Controllers\BusController::class, 'search'])->name('search');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('bustypes', App\Http\Controllers\BustypeController::class);

Route::resource('businfos', App\Http\Controllers\BusinfoController::class);