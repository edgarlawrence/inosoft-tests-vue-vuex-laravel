<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UOMController;
use App\Http\Controllers\ChargeToController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\InvoiceToController;
use App\Http\Controllers\CustomerPoNoController;
use App\Http\Controllers\AssignedVendorController;
use App\Http\Controllers\CustomerContractController;

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

Route::controller(AssignedVendorController::class)->group(function () {
    Route::get('/assignedvendor', 'index');
    Route::post('/assignedvendor', 'store' );
    Route::put('/assignedvendor/{id}', 'update');
    Route::delete('/assignedvendor/{id}', 'destroy');
});

Route::controller(InvoiceToController::class)->group(function () {
    Route::get('/invoiceto', 'index');
    Route::post('/invoiceto', 'store' );
    Route::put('/invoiceto/{id}', 'update');
    Route::delete('/invoiceto/{id}', 'destroy');
});

Route::controller(CustomerContractController::class)->group(function () {
    Route::get('/customercontracts', 'index');
    Route::post('/customercontracts', 'store' );
    Route::put('/customercontracts/{id}', 'update');
    Route::delete('/customercontracts/{id}', 'destroy');
});

Route::controller(CustomerPoNoController::class)->group(function () {
    Route::get('/customerpono', 'index');
    Route::post('/customerpono', 'store' );
    Route::put('/customerpono/{id}', 'update');
    Route::delete('/customerpono/{id}', 'destroy');
});

