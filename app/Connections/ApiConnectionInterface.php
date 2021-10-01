<?php

namespace App\Connections;

interface ApiConnectionInterface
{
    public function weatherData():\stdClass;
}