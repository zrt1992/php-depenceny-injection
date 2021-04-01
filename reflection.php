<?php
class game{
    public $name ="hi";
    function __construct($firstname,$lastname)
    {
        echo "constructior";
    }

    public  function hello(){
        echo 'this is hello';
}



}

$reflectionClass = new \ReflectionClass("game");
$current_class = $reflectionClass->getConstructor();
$params = $reflectionClass->getConstructor()->getParameters();
var_dump($params);
