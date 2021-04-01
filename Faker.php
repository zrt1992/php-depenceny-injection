<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'
echo $faker->email();
// 'walter.sophia@hotmail.com'
echo $faker->text();

// 'Numquam ut mollitia at consequuntur inventore dolorem.'

class FakerLibrary
{
    public $faker;

    function __construct(Faker\Factory $faker)
    {
        $this->faker = $faker;

    }
}
