<?php

namespace App\Services;

use App\Connections\ApiConnectionInterface;
use App\WeatherForecastCollection;
use App\WeatherForecast;

class DaysForecastService
{
    private \stdClass  $apiData ;

    public function __construct(\stdClass $apiData)
    {
        $this->apiData = $apiData;
    }
    public function execute(int $days = 3): WeatherForecastCollection
    {
        $daysForecasts = new WeatherForecastCollection();
        foreach ($this->apiData->forecast->forecastday as $day) {
            $daysForecasts->add(new WeatherForecast(
                $day->date,
                $day->day->avgtemp_c,
                $day->day->maxwind_kph,
                $day->day->condition->icon,
                $day->day->condition->text,
                $day->day->maxtemp_c,
                $day->day->mintemp_c));
        }
    //var_dump($daysForecasts);
        return $daysForecasts;
    }
}