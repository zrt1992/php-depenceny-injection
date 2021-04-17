<?php

$store=[];
function lcs($i, $j, $count, &$X, &$Y)
{
    global $store;
    if(isset($store[$i][$j])) return $store[$i][$j];
    if ($i == 0 || $j == 0)
        return $count;

    if ($X[$i - 1] == $Y[$j - 1]) {
        $count = lcs($i - 1, $j - 1,
            $count + 1, $X, $Y);
    }
    $result= max($count, lcs($i, $j - 1, 0, $X, $Y),
        lcs($i - 1, $j, 0, $X, $Y));
    $store[$i][$j]=$result;
    return $result;
}

// Driver code
$X = "abc";
$Y = "abc";

$n = strlen($X);
$m = strlen($Y);
echo '<pre>';
echo lcs($n, $m, 0, $X, $Y);
echo '<pre>';
print_r($store);
