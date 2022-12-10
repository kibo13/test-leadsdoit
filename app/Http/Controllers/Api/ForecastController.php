<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Forecasts\GetTemperatureRequest;
use App\Http\Resources\Forecasts\ForecastIndexResource;
use App\Services\Forecast\ForecastService;

class ForecastController extends Controller
{
    protected $service;

    public function __construct(ForecastService $service)
    {
        $this->service = $service;
    }

    public function getTemperatureForDay(GetTemperatureRequest $request)
    {
        return ForecastIndexResource::collection(
            $this->service->getTemperatureForDay($request->validated())
        );
    }
}
