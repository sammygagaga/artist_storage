<?php


use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Support\Facades\Route;



Route::controller(UserController::class)->prefix('/user/v1')->group(function () {
    Route::get('{user}', 'show')->name('user.show.v1');
    Route::post('/', 'store')->name('user.store.v1');
    Route::delete('{user}', 'destroy')->name('user.destroy.v1');
});

