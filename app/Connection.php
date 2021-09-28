<?php

namespace App;

use WeatherAPILib\WeatherAPIClient;
use WeatherAPILib\Controllers\APIsController;
use JsonSerializable;

class Connection
{
    private string $key = '069d90cba34749c399575430212809';
    private APIsController $aPIs;
    private string $city;

    public function __construct(string $defaultCity)
    {
        $this->city = $defaultCity;
        $client = new WeatherAPIClient($this->key);
        $this->aPIs = $client->getAPIs();
    }

    public function get3DayForecast(): JsonSerializable
    {
        return $this->aPIs->getForecastWeather($this->city, 3);
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getNext8HourForecast(): array
    {
        $time = time();
        $data = json_decode(file_get_contents(
            "http://api.weatherapi.com/v1/forecast.json?key=069d90cba34749c399575430212809&q=.$this->city.&days=1&aqi=no&alerts=no"));
        $i = 0;
        $next8Hours = [];

        foreach ($data->forecast->forecastday[0]->hour as $hourRecord) {
            if ($time < $hourRecord->time_epoch && $i < 8) {
                $i++;
                $next8Hours [] = new WeatherForecastAttributes($hourRecord->time, $hourRecord->temp_c, $hourRecord->wind_kph, $hourRecord->condition->icon,$hourRecord->condition->text);

            }
        }
        return $next8Hours;

    }
}