<?php

use App\Http\Controllers\Api\ForecastController;
use Illuminate\Support\Facades\Route;


Route::get('/daily-temperature', [ ForecastController::class, 'getTemperatureForDay' ]);
