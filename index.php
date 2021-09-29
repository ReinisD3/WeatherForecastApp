<?php

require_once 'vendor/autoload.php';

use App\Connection;

$city = 'Riga';

$connection = new Connection($city,'3');

if (isset($_POST['submit']))
{
    $city = $_POST['city'];
    if (empty($city))
    {
        echo 'Please Enter City name';

    }else
    {
        $connection = new Connection($city,'3') ;
    }
}

$hoursToShow = 9;
$nextHours = $connection->getNextHourForecast($hoursToShow);

$nextDaysForecast = $connection->getDayForecast();


require 'index.view.html';


