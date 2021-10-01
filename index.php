<?php

require_once 'vendor/autoload.php';

use App\Connections\WeatherApi;
use App\Services\DaysForecastService;
use App\Services\HoursForecastService;


$city = isset($_GET['submit']) ? $_GET['city'] ?? 'Riga' : 'Riga';

$weatherApi = new Weatherapi('069d90cba34749c399575430212809' ,$city, 3);
$weatherData = $weatherApi->weatherData();

$nextDaysForecasts = (new DaysForecastService($weatherData))->execute();

$hoursToShow = 9;
$nextHours = (new HoursForecastService($weatherData))->execute($hoursToShow);



require 'index.view.html';


