<?php

namespace App;

class WeatherForecastCollection
{
    private array $weatherCollection ;

    public function add(WeatherForecast $forecast):void
    {
        $this->weatherCollection[] = $forecast;
    }
    public function weatherCollection():array
    {
        return $this->weatherCollection;
    }


}