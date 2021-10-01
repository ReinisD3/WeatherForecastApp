<?php

namespace App\Services;

use App\Connections\ApiConnectionInterface;
use App\WeatherForecast;
use App\WeatherForecastCollection;

class HoursForecastService extends ForecastService
{

    public function execute(int $hours): WeatherForecastCollection
    {
        $time = time();

        $i = 0;
        $nextHours = new WeatherForecastCollection();
        foreach ($this->apiData->forecast->forecastday as $day) {
            foreach ($day->hour as $dayHour) {

                if($i >= $hours) continue;
                if ($time < $dayHour->time_epoch) {
                    $i++;
                    $nextHours->add(new WeatherForecast(
                        $dayHour->time,
                        $dayHour->temp_c,
                        $dayHour->wind_kph,
                        $dayHour->condition->icon,
                        $dayHour->condition->text));

                }
            }
        }
        return $nextHours;

    }
}