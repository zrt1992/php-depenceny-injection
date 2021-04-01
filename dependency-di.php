<?php
require 'vendor/autoload.php';

use DI\Container;
use DI\ContainerBuilder;
use App\GeolocationService;
use App\GoogleMaps;
use App\AppleMaps;
use  Faker\Factory;

$config = [
    'service' => 'GoogleMaps'

];


//interface GeolocationService {
//    public function getCoordinatesFromAddress($address);
//}
//
//class AppleMaps implements GeolocationService
//{
//    public function getCoordinatesFromAddress($address)
//    {
//        return "apple maps";
//    }
//}
//class GoogleMaps implements GeolocationService
//{
//    public function getCoordinatesFromAddress($address)
//    {
//        return 'google maps';
//    }
//}


class StoreService //Database service
{
    public $geoLocationService;

    function __construct(GeolocationService $geoLocationService)
    {
        $this->geoLocationService = $geoLocationService;


    }

    public function getStoreCoordinates(GeolocationService $mapService)
    {
        $this->geoLocationService = $mapService;
    }
}

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(
    [
        'GoogleMaps' => function (Container $c) {
            return new GoogleMaps();
        },
        'AppleMaps' => function (Container $c) {
            return new AppleMaps();
        },
        'StoreService' => DI\create()
            ->constructor(DI\get($config['service'])),
        'Faker' => function (){
            return new Factory ();
        }
    ]
);
$container = $containerBuilder->build();
$faker = $container->get('Faker');
$faker = $faker->create();
var_dump($faker->name());
//$storeservice = $container->get('StoreService');
//echo $storeservice->geoLocationService->getCoordinatesFromAddress('as');
