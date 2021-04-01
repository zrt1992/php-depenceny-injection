<?php
namespace App;

interface GeolocationService
{
    public function getCoordinatesFromAddress($address);
}

