<?php

use App\Http\Controllers\Api\v1\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\v1\PurchaseController;

Route::controller(PurchaseController::class)->prefix('purchase/v1')->group(function () {
    Route::post('/','add')->middleware('auth:sanctum')->name('purchases.add');
    Route::get('{purchase}','list')->middleware('auth:sanctum')->name('purchases.list');
    Route::delete('{purchase}', 'destroy')->middleware('admin')->name('purchases.destroy');
});
