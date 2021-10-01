<?php

namespace App\Connections;

use App\Connections\ApiConnectionInterface;

class WeatherApi implements ApiConnectionInterface
{
    private string $city;
    private \stdClass $data;
    private string $days;
    private string $baseUrl = "http://api.weatherapi.com/v1/forecast.json?key=";
    private string $apiKey;

    public function __construct(string $apiKey ,string $defaultCity, string $days)
    {
        $this->apiKey = $apiKey;
        $this->city = $defaultCity;
        $this->days = $days;
        $this->data = json_decode(file_get_contents($this->baseUrl.$this->apiKey."&q={$this->city}&days={$this->days}&aqi=no&alerts=no"));
        var_dump($this->data);
    }
    public function weatherData():\stdClass
    {
        return $this->data ;
    }


}