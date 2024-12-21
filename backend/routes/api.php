<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;

Route::get('/guitars', [GuitarController::class, 'index'])->name('guitars.index');
Route::get('/guitars/{id}', [GuitarController::class, 'show'])->whereNumber('id')->name('guitars.show');
Route::post('/guitars', [GuitarController::class, 'store'])->name('guitars.store');
Route::put('/guitars/{id}', [GuitarController::class, 'update'])->whereNumber('id')->name('guitars.update');
Route::delete('/guitars/{id}', [GuitarController::class, 'destroy'])->whereNumber('id')->name('guitars.destroy');