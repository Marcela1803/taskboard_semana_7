<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComercioController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\EventoTransaccionController;

Route::get('/contacto', function () {
    return 'Adriana Marcela Hernandez Recinos, correo: adriana.hernandez64876@uped.edu.sv';
});

Route::get('/estados', function () {
    return [
        "Iniciada", "Procesando", "Aprobada", "Rechazada", "Liquidada"
    ];
});

Route::get('/transaccion/demo', function () {
    return [
        "id" => 1,
        "comercio" => "Café Amanecer",
        "monto" => 25.50,
        "moneda" => "USD",
        "estado" => "Aprobada",
    ];
});

Route::get('/transacciones', [TransaccionController::class, 'index'])->name('transacciones.index');

Route::get('/transaccion/{transaccion}', [TransaccionController::class, 'show']);

Route::get('/eventos-transaccion', [EventoTransaccionController::class, 'index'])->name('eventos-transaccion.index');

Route::prefix('comercios')->name('comercios.')->group(function () {
    Route::get('/', [ComercioController::class, 'index'])->name('index');
    Route::get('/{comercio}', [ComercioController::class, 'show'])->name('show');
});