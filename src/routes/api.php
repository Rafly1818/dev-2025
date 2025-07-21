<?php

use App\Http\Controllers\Api\V1\ReservationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/services', [ReservationApiController::class, 'getServices']);
    Route::get('/barbers', [ReservationApiController::class, 'getBarbers']);
    Route::get('/availability', [ReservationApiController::class, 'getAvailability']);
    Route::post('/reservations', [ReservationApiController::class, 'createReservation']);
});