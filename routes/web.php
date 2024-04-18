<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PvController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReabastecimientosController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para opcion Punto de venta
Route::controller(PvController::class)->group(function () {
    Route::get('pv', 'showPv')->name('show.pv');
    Route::post('pv', 'storeTicket')->name('store.ticket');
});

//Rutas para opcion Inventario
Route::controller(InventarioController::class)->group(function () {
    Route::get('inventario', 'showInventario')->name('show.inventario');

    Route::get('inventario/info/{id}', 'showInfoProducto')->name('show.info_producto');
    Route::delete('inventario/info/{id}', 'deleteProducto')->name('delete.producto');

    Route::get('inventario/agregar', 'showAgregarProducto')->name('show.agregar_producto');
    Route::post('inventario/agregar', 'storeProducto')->name('store.producto');

    Route::get('inventario/editar/{id}', 'showEditarProducto')->name('show.editar_producto');
    Route::put('inventario/editar/{id}', 'updateProducto')->name('update.producto');
        
});

//Rutas para opcion Reabastecimientos
Route::controller(ReabastecimientosController::class)->group(function () {
    Route::get('reabastecimientos', 'showReabastecimientos')->name('show.reabastecimientos');
    Route::get('reabastecimientos/entregadas', 'showEntregadas')->name('show.entregadas');

    Route::get('reabastecimientos/info/{id}', 'showInfoOrden')->name('show.info_orden');
    Route::delete('reabastecimientos/info/{id}', 'deleteOrden')->name('delete.orden');

    Route::get('reabastecimientos/agregar', 'showAgregarOrden')->name('show.agregar_orden');
    Route::post('reabastecimientos/agregar', 'storeOrden')->name('store.orden');

    Route::get('reabastecimientos/editar/{id}', 'showEditarOrden')->name('show.editar_orden');
    Route::put('reabastecimientos/editar/{id}', 'updateOrden')->name('update.orden');
        
});