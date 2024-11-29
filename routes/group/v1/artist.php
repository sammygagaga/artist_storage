<?php

use App\Http\Controllers\Api\v1\ArtistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::controller(ArtistController::class)->prefix('artist/v1')->group(function () {
    Route::get('/', 'index')->name("artist.index");
    Route::get('{artist}', 'show')->name("artist.show");
    Route::post('/', 'store')->name("artist.create");
    Route::patch('{artist}', 'update')->name("artist.update");
    Route::delete('{artist}', 'destroy')->name("artist.destroy");
});

Route::controller(LoginController::class)->group(function () {
    Route::post('login', 'login')->name("login");
});
