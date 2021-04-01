<?php
namespace Foo;

require(__DIR__ . "/vendor/autoload.php");

interface IDog {
    function bark();
}

class Poodle implements IDog {
    public function bark() {
        echo "woof!" . PHP_EOL;
    }
}

class Kennel {
    protected $dog;
    public function __construct(\Foo\IDog $dog) {
        $this->dog = $dog;
    }

    public function pokeDog() {
        $this->dog->bark();
    }
}

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions([
    "\Foo\IDog" => \DI\autowire("\Foo\Poodle")
]);
$container = $containerBuilder->build();

//Works:
$mydog = $container->get("\Foo\IDog");
$mydog->bark();

//Does not work:
$kennel = $container->get("\Foo\Kennel");
$kennel->pokeDog();
