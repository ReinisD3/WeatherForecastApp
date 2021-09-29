<?php

namespace App;

use JsonSerializable;

class WeatherForecast
{

    private string $time;
    private float $temperature;
    private float $wind;
    private string $icon;
    private string $iconText;
    private ?float $maxTemp;
    private ?float $minTemp;

    public function __construct(string $time , float $temperature , float $wind ,string $icon,string $iconText, float $maxTemp = null, float $minTemp = null)
    {

        $this->time = $time;
        $this->temperature = $temperature;
        $this->wind = $wind;
        $this->icon = $icon;
        $this->iconText = $iconText;
        $this->maxTemp = $maxTemp;
        $this->minTemp = $minTemp;
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

    public function getMaxTemp(): ?float
    {
        return $this->maxTemp;
    }

    public function getMinTemp(): ?float
    {
        return $this->minTemp;
    }
}