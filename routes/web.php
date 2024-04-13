<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PvController;
use App\Http\Controllers\InventarioController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para opcion Punto de venta
Route::controller(InventarioController::class)->group(function () {
    Route::get('pv', 'showPv')->name('show.pv');
    Route::post('pv', 'storeTicket')->name('store.ticket');
});

//Rutas para opcion Inventario
Route::controller(PvController::class)->group(function () {
    Route::get('pv', 'showPv')->name('show.pv');
    Route::post('pv', 'storeTicket')->name('store.ticket');
});