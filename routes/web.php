<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PvController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('pv');
});

//Rutas para view Punto de venta
Route::controller(PvController::class)->group(function () {
    Route::get('pv', 'showPv')->name('show.pv');
    Route::post('pv', 'storeTicket')->name('store.ticket');
});