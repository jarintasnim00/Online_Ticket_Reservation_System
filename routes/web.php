<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\TripcostController;
use App\Http\Controllers\ReportController;


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
Route::get('/loginsession', function () {
    return view('session');
});
Route::get('/check', function () {
    return view('myTestMail');
});

Route::get('/profile', function () {
    return view('sessionview');
});

Route::get('/logout', function () {

    if(session()->has('user'))
     {
    	session()->pull('user');
    }
    return redirect('loginsession');
});

// Route::view('/loginsession','session');

// Route::view('/profile','sessionview');

Route::post('/session', [App\Http\Controllers\sessionController::class, 'loginsession']);



Route::get('/shohoz', function () {
    return view('shohoz');
});

Route::post('/booking/bus/pay-now', [App\Http\Controllers\BusController::class, 'payment_now']);

Route::post('/booking/bus/add-payment', [App\Http\Controllers\BusController::class, 'add_payment'])->name('payment.post');

Route::get('/getdata1',"TripcostController@bdata1");


Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('user.bookingbus');
})->name('bokking.get');

Route::get('/booking/{data_list}/{bus_id}/{boarding_point}/{demo_user_id}', [App\Http\Controllers\BusController::class, 'after_booking'])->name('booking.get');

Route::post('/booking', [App\Http\Controllers\BusController::class, 'add_data'])->name('booking.post');


Route::get('/booked_seat', [App\Http\Controllers\BusController::class, 'view']);

Route::get('/ticket_sold_status', [App\Http\Controllers\StatusController::class, 'ticket_sold_status']);

Route::get('/daily_sales_status', [App\Http\Controllers\StatusController::class, 'daily_sales_status']);

Route::get('/payment_report', [App\Http\Controllers\StatusController::class, 'payment_report']);

Route::post('/buses/search', [App\Http\Controllers\BusController::class, 'booked_seat']);

Route::get('/', [App\Http\Controllers\BusController::class, 'index']);

Route::get('/buses/search', [App\Http\Controllers\BusController::class, 'search'])->name('search');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('bustypes', App\Http\Controllers\BustypeController::class);

Route::resource('businfos', App\Http\Controllers\BusinfoController::class);

Route::resource('counters', App\Http\Controllers\CounterController::class);


// SSLCOMMERZ Start
Route::get('/example1/{demo_user_id}', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::get('/payment_success', [SslCommerzPaymentController::class, 'payment_success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


///Session route Start
// Route::get('/session/get', [sessionController::class, 'getSessionData'])->name('session.get');
// Route::get('/session/set', [sessionController::class, 'storeSessionData'])->name('session.store');
// Route::get('/session/delete', [sessionController::class, 'deleteSessionData'])->name('session.delete');

Route::resource('tripcosts', App\Http\Controllers\TripcostController::class);
Route::get('/tripcosts/pdf/{id}', [TripcostController::class, 'show00'])->name('tripcosts.pdf');


//report 

Route::get('/report', [App\Http\Controllers\ReportController::class, 'report_generate']);

//dompdf generate
Route::get('generate-pdf', [App\Http\Controllers\ReportController::class, 'generatePDF']);

Route::resource('busOwners', App\Http\Controllers\Bus_ownerController::class);