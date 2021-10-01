<?php

namespace App\Services;

abstract class ForecastService
{
    protected \stdClass $apiData;

    public function __construct(\stdClass $apiData)
    {
        $this->apiData = $apiData;
    }
}