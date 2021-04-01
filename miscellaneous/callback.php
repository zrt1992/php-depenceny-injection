<?php

function game ($a,$b){
    return $a+$b;
}
function call_something($a,$b, callable $fn) {
  //  echo $a + $b;
   // var_dump($fn);
    $msg = "asd";
   return call_user_func($fn,$msg);
}

$callback = function ($msg) {
    echo ' [x] Received ', $msg, "\n";
};

$a=6;
$b=7;

  echo call_something(3,4,$callback);



?>
