<?php
namespace App;
use App\GeolocationService;

class AppleMaps implements GeolocationService
{
    public function getCoordinatesFromAddress($address)
    {
        return "apple maps";
    }
}
