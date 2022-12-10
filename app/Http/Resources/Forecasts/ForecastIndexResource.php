<?php

namespace App\Http\Resources\Forecasts;

use Illuminate\Http\Resources\Json\JsonResource;

class ForecastIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'city' => $this->city->name,
            'temp' => $this->data,
            'time' => dth_date($this->created_at, 'H:i')
        ];
    }
}
