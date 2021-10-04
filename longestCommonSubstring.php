<?php

function lcs($i, $j, $count, &$X, &$Y)
{
    // if(isset($store[$i][$j])) return $store[$i][$j];
    if ($i == 0 || $j == 0) {
        //echo $count . '<br>';
        return $count ;
    }
    if ($X[$i - 1] == $Y[$j - 1]) {
        return lcs($i - 1, $j - 1,
            $count + 1, $X, $Y);
    }
    return max($count, lcs($i, $j - 1, 0, $X, $Y),
        lcs($i - 1, $j, 0, $X, $Y));
}


// Driver code
$X = "abcxtttt";
$Y = "abcktttt";

$n = strlen($X);
$m = strlen($Y);
echo '<pre>';
echo lcs($n, $m, 0, $X, $Y);
echo '<pre>';
//print_r($store);
