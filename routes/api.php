<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UOMController;
use App\Http\Controllers\ChargeToController;
use App\Http\Controllers\CurrencyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UOMController::class)->group(function () {
    Route::get('/uom', 'index');
    Route::post('/uom', 'store' );
    Route::put('/uom/{id}', 'update');
    Route::delete('/uom/{id}', 'destroy');
});

Route::controller(CurrencyController::class)->group(function () {
    Route::get('/currency', 'index');
    Route::post('/currency', 'store' );
    Route::put('/currency/{id}', 'update');
    Route::delete('/currency/{id}', 'destroy');
});

Route::controller(ChargeToController::class)->group(function () {
    Route::get('/chargeto', 'index');
    Route::post('/chargeto', 'store' );
    Route::put('/chargeto/{id}', 'update');
    Route::delete('/chargeto/{id}', 'destroy');
});