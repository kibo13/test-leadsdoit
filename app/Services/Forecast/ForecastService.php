<?php


namespace App\Services\Forecast;


use App\Models\Forecast;
use App\Services\City\CityService;

class ForecastService
{
    protected $model;
    protected $cityService;

    public function __construct(
        Forecast $model,
        CityService $cityService
    )
    {
        $this->model = $model;
        $this->cityService = $cityService;
    }

    public function create($data)
    {
        $city = $this->cityService->updateOrCreate($data->name);

        return $this->model->query()->create(
            [
                'city_id' => $city->id,
                'data'    => $data->main
            ]
        );
    }

    public function getTemperatureForDay($day)
    {
        return $this->model
            ->query()
            ->whereDate('created_at', $day)
            ->get();
    }
}
