<?php

$store=[];


function lcsDy($X, $Y, $m, $n)
{
    global $store;
    if (isset($store[$m][$n])) return $store[$m][$n];
    if ($m == 0 || $n == 0) {
        return 0;
    } else if ($X[$m - 1] == $Y[$n - 1]) {
        $store[$m][$n] = 1 + lcsDy($X, $Y, $m - 1, $n - 1);
        return $store[$m][$n];
    } else {
        $store[$m][$n] = max(lcsDy($X, $Y, $m, $n - 1), lcsDy($X, $Y, $m - 1, $n));
        return $store[$m][$n];
    }
}



$X = "abcdefg";
$Y = "cdg";

$n = strlen($X);
$m = strlen($Y);

echo lcsDy( $X, $Y,$n, $m);
