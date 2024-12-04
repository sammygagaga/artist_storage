<?php

use App\Http\Controllers\Api\v1\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\v1\PurchaseController;

Route::controller(PurchaseController::class)->prefix('purchase/v1')->group(function () {
    Route::post('/','add')->middleware('artists.accessor')->name('purchases.add');
    Route::get('{purchase}','list')->name('purchases.list');
});
