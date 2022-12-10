<?php


namespace App\Services\OpenWeather;


use GuzzleHttp\Client;

class OpenWeatherService
{
    public const DOMAIN = 'https://api.openweathermap.org/';

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getWeather()
    {
        try {
            $response = $this->client->request(
                'GET',
                self::DOMAIN . "data/2.5/weather",
                [
                    'query' => [
                        'q'     => env('OPENWEATHER_CITY'),
                        'appid' => env('OPENWEATHER_API_KEY'),
                    ]
                ]
            );

            return response()->json([
                'status' => 'success',
                'data'   => json_decode($response->getBody()->getContents()),
                'code'   => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'data'   => $e->getMessage(),
                'code'   => $e->getCode()
            ]);
        }
    }
}
