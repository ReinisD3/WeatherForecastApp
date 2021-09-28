<?php

namespace App;

use JsonSerializable;

class WeatherForecastAttributes
{

    private string $time;
    private float $temperature;
    private float $wind;
    private string $icon;
    private string $iconText;

    public function __construct(string $time , float $temperature , float $wind ,string $icon,string $iconText)
    {

        $this->time = $time;
        $this->temperature = $temperature;
        $this->wind = $wind;
        $this->icon = $icon;
        $this->iconText = $iconText;
    }

    public function getTime(): string
    {
        return $this->time;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getWind(): float
    {
        return $this->wind;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }
    public function getIconText(): string
    {
        return $this->iconText;
    }
}