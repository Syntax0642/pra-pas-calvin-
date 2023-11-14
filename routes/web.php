<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PlaneController;

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

Route::get('/orders/all',[HotelController::class,'index']);

Route::get('/planes/all',[PlaneController::class,'indexs']);

Route::get('/orders/detail/{hotels}', [HotelController::class, 'show'])->name('hotels.show');

Route::get('/planes/detail/{planes}', [PlaneController::class, 'shows'])->name('planes.show');

