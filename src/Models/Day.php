<?php
/*
 * WeatherAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace WeatherAPILib\Models;

use JsonSerializable;

/**
 *See day element
 */
class Day implements JsonSerializable
{
    /**
     * Maximum temperature in celsius for the day.
     * @maps maxtemp_c
     * @var double|null $maxtempC public property
     */
    public $maxtempC;

    /**
     * Maximum temperature in fahrenheit for the day
     * @maps maxtemp_f
     * @var double|null $maxtempF public property
     */
    public $maxtempF;

    /**
     * Minimum temperature in celsius for the day
     * @maps mintemp_c
     * @var double|null $mintempC public property
     */
    public $mintempC;

    /**
     * Minimum temperature in fahrenheit for the day
     * @maps mintemp_f
     * @var double|null $mintempF public property
     */
    public $mintempF;

    /**
     * Average temperature in celsius for the day
     * @maps avgtemp_c
     * @var double|null $avgtempC public property
     */
    public $avgtempC;

    /**
     * Average temperature in fahrenheit for the day
     * @maps avgtemp_f
     * @var double|null $avgtempF public property
     */
    public $avgtempF;

    /**
     * Maximum wind speed in miles per hour
     * @maps maxwind_mph
     * @var double|null $maxwindMph public property
     */
    public $maxwindMph;

    /**
     * Maximum wind speed in kilometer per hour
     * @maps maxwind_kph
     * @var double|null $maxwindKph public property
     */
    public $maxwindKph;

    /**
     * Total precipitation in milimeter
     * @maps totalprecip_mm
     * @var double|null $totalprecipMm public property
     */
    public $totalprecipMm;

    /**
     * Total precipitation in inches
     * @maps totalprecip_in
     * @var double|null $totalprecipIn public property
     */
    public $totalprecipIn;

    /**
     * Average visibility in kilometer
     * @maps avgvis_km
     * @var double|null $avgvisKm public property
     */
    public $avgvisKm;

    /**
     * Average visibility in miles
     * @maps avgvis_miles
     * @var double|null $avgvisMiles public property
     */
    public $avgvisMiles;

    /**
     * Average humidity as percentage
     * @var double|null $avghumidity public property
     */
    public $avghumidity;

    /**
     * @todo Write general description for this property
     * @var \WeatherAPILib\Models\Condition|null $condition public property
     */
    public $condition;

    /**
     * UV Index
     * @var double|null $uv public property
     */
    public $uv;

    /**
     * Constructor to set initial or default values of member properties
     * @param double    $maxtempC      Initialization value for $this->maxtempC
     * @param double    $maxtempF      Initialization value for $this->maxtempF
     * @param double    $mintempC      Initialization value for $this->mintempC
     * @param double    $mintempF      Initialization value for $this->mintempF
     * @param double    $avgtempC      Initialization value for $this->avgtempC
     * @param double    $avgtempF      Initialization value for $this->avgtempF
     * @param double    $maxwindMph    Initialization value for $this->maxwindMph
     * @param double    $maxwindKph    Initialization value for $this->maxwindKph
     * @param double    $totalprecipMm Initialization value for $this->totalprecipMm
     * @param double    $totalprecipIn Initialization value for $this->totalprecipIn
     * @param double    $avgvisKm      Initialization value for $this->avgvisKm
     * @param double    $avgvisMiles   Initialization value for $this->avgvisMiles
     * @param double    $avghumidity   Initialization value for $this->avghumidity
     * @param Condition $condition     Initialization value for $this->condition
     * @param double    $uv            Initialization value for $this->uv
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->maxtempC      = func_get_arg(0);
            $this->maxtempF      = func_get_arg(1);
            $this->mintempC      = func_get_arg(2);
            $this->mintempF      = func_get_arg(3);
            $this->avgtempC      = func_get_arg(4);
            $this->avgtempF      = func_get_arg(5);
            $this->maxwindMph    = func_get_arg(6);
            $this->maxwindKph    = func_get_arg(7);
            $this->totalprecipMm = func_get_arg(8);
            $this->totalprecipIn = func_get_arg(9);
            $this->avgvisKm      = func_get_arg(10);
            $this->avgvisMiles   = func_get_arg(11);
            $this->avghumidity   = func_get_arg(12);
            $this->condition     = func_get_arg(13);
            $this->uv            = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['maxtemp_c']      = $this->maxtempC;
        $json['maxtemp_f']      = $this->maxtempF;
        $json['mintemp_c']      = $this->mintempC;
        $json['mintemp_f']      = $this->mintempF;
        $json['avgtemp_c']      = $this->avgtempC;
        $json['avgtemp_f']      = $this->avgtempF;
        $json['maxwind_mph']    = $this->maxwindMph;
        $json['maxwind_kph']    = $this->maxwindKph;
        $json['totalprecip_mm'] = $this->totalprecipMm;
        $json['totalprecip_in'] = $this->totalprecipIn;
        $json['avgvis_km']      = $this->avgvisKm;
        $json['avgvis_miles']   = $this->avgvisMiles;
        $json['avghumidity']    = $this->avghumidity;
        $json['condition']      = $this->condition;
        $json['uv']             = $this->uv;

        return $json;
    }
}
