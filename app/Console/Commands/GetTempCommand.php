<?php

namespace App\Console\Commands;

use App\Services\Forecast\ForecastService;
use App\Services\OpenWeather\OpenWeatherService;
use Illuminate\Console\Command;

class GetTempCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'temp:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store temperature';

    protected $service;
    protected $openWeatherService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        ForecastService $service,
        OpenWeatherService $openWeatherService
    )
    {
        parent::__construct();
        $this->service = $service;
        $this->openWeatherService = $openWeatherService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->openWeatherService->getWeather()->original['data'];
        $this->service->create($data);
    }
}
