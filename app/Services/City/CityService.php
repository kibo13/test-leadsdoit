<?php


namespace App\Services\City;


use App\Models\City;

class CityService
{
    protected $model;

    public function __construct(City $model)
    {
        $this->model = $model;
    }

    public function updateOrCreate($city)
    {
        return $this->model->query()->updateOrCreate(
            [ 'name' => $city ],
            [ 'name' => $city ]
        );
    }
}
