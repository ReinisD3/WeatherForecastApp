<?php

require_once 'vendor/autoload.php';

use App\Connection;


$connection = new Connection('Riga');


if (isset($_POST['submit']))
{
    if (empty($_POST['city']))
    {
        echo 'Please Enter City name';

    }else
    {
        $connection->setCity($_POST['city']) ;
    }
}
$next8Hours = $connection->getNext8HourForecast();

$next3DaysForecast = $connection->get3DayForecast();


require 'index.view.html';


