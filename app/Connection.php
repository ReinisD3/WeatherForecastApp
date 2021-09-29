<?php

namespace App;



class Connection
{


    private string $city;
    private string $key;
    private \stdClass $data;

    public function __construct(string $defaultCity)
    {
        $this->city = $defaultCity;
        $d = 3;

        $this->key = "http://api.weatherapi.com/v1/forecast.json?key=069d90cba34749c399575430212809&q='.$this->city.'&days='.$d.'&aqi=no&alerts=no";
        var_dump($this->key);
        $this->data = json_decode(file_get_contents($this->key));

    }

    public function getDayForecast(): array
    {

        $dayForecast = [];
        foreach ($this->data->forecast->forecastday as $day) {
            $dayForecast[] = new WeatherForecast(
                $day->date,
                $day->day->avgtemp_c,
                $day->day->maxwind_kph,
                $day->day->condition->icon,
                $day->day->condition->text,
                $day->day->maxtemp_c,
                $day->day->mintemp_c);
        }

        return $dayForecast;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getNextHourForecast(int $hours): array
    {
        $time = time();

        $i = 0;
        $next8Hours = [];
        foreach ($this->data->forecast->forecastday as $day) {
            foreach ($day->hour as $dayHour) {

                if($i >= $hours) continue;
                if ($time < $dayHour->time_epoch) {
                    $i++;
                    $next8Hours [] = new WeatherForecast(
                        $dayHour->time,
                        $dayHour->temp_c,
                        $dayHour->wind_kph,
                        $dayHour->condition->icon,
                        $dayHour->condition->text);

                }
            }
        }
        return $next8Hours;

    }
}