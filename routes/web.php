<?php

use App\Http\Controllers\TikerorangController;
use App\Models\tikerorang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\TicketController;

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

Route::get('/', function () {
    return redirect('/home');
});


Route::get('/home', function () {
    return view('home',[
        'title' => 'home'
    ]);
});

Route::get('/orders/all',[HotelController::class,'index'])->name('orders.index');

Route::get('/planes/all',[PlaneController::class,'indexs'])->name('planes.indexs');

Route::get('/tickets/all',[TicketController::class,'indexss'])->name('tickets.indexss');

Route::get('/tiketorang/all',[TikerorangController::class,'indextiket'])->name('ticketss.indextiket');

Route::get('/orders/detail/{hotels}', [HotelController::class, 'show'])->name('hotels.show');

Route::get('/planes/detail/{planes}', [PlaneController::class, 'shows'])->name('planes.show');

Route::get('/tickets/detail/{tickets}', [TicketController::class, 'showss'])->name('tickets.show');

Route::delete('/orders/hotelsdestroy/{hotels}', [HotelController::class, 'destroy'])->name('hotels.destroy');

Route::delete('/tickets/ticketsdestroy/{tickets}', [TicketController::class, 'destroys'])->name('tickets.destroy');

Route::delete('/tiketorang/tiketorgdestroy/{tiketorg}', [TikerorangController::class, 'destroy'])->name('tiketorg.destroy');

Route::get('/tickets/edit/{tickets}', [TicketController::class, 'edit'])->name('tickets.edit');

Route::get('/tiketorang/edit/{tickets}', [TikerorangController::class, 'edit'])->name('tickets.edit');

Route::put('/tickets/update/{tickets}', [TicketController::class, 'update'])->name('tickets.update');

Route::put('/tiketorang/update/{tickets}', [TikerorangController::class, 'update'])->name('tickets.update');

Route::get('/tickets/add', [TicketController::class, 'create'])->name('tickets.add');

Route::get('/tiketorang/add', [TikerorangController::class, 'create'])->name('tiketorg.add');

Route::post('/tickets/store', [TicketController::class, 'store'])->name('tickets.store');

Route::post('/tiketorang/store', [TikerorangController::class, 'store'])->name('tiketorg.store');




