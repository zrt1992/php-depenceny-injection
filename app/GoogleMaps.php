<?php

namespace App;
use App\GeolocationService;

class GoogleMaps implements GeolocationService
{
    public function getCoordinatesFromAddress($address)
    {
        return 'google maps';
    }
}
