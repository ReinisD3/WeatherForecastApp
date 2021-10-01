<?php

require_once 'vendor/autoload.php';

use App\Connections\WeatherApi;
use App\Services\DaysForecastService;
use App\Services\HoursForecastService;



$city = isset($_GET['submit']) ? $_GET['city'] ?? 'Riga' : 'Riga';

$configWeatherApi = json_decode(file_get_contents('config.WeatherApi.json'),true);

$weatherApi = new WeatherApi($configWeatherApi['apiKey'] ,$city, 3);
$weatherData = $weatherApi->weatherData();

$nextDaysForecasts = (new DaysForecastService($weatherData))->execute();

$hoursToShow = 9;
$nextHours = (new HoursForecastService($weatherData))->execute($hoursToShow);



require 'index.view.html';


