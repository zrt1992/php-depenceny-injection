<?php

$store = [];
function lcs($X, $Y, $m, $n)
{
    if($m == 0 || $n == 0)
        return 0;
    else if ($X[$m - 1] == $Y[$n - 1])
        return 1 + lcs($X, $Y,
                $m - 1, $n - 1);
    else
        return max(lcs($X, $Y, $m, $n - 1),
            lcs($X, $Y, $m - 1, $n));
}
/** lcsDy is dynamic programming implementation of lcs */
function lcsDy($X, $Y, $m, $n){
    global $store;
    if (isset($store[$m . $n])) return $store[$m . $n];
    if ($m == 0 || $n == 0) {
        return 0;
    } else if ($X[$m - 1] == $Y[$n - 1]) {
        $store[$m . $n] = 1 + lcsDy($X, $Y, $m - 1, $n - 1);
        return $store[$m . $n];
    } else {
        $store[$m . $n] = max(lcsDy($X, $Y, $m, $n - 1), lcsDy($X, $Y, $m - 1, $n));
        return $store[$m . $n];
    }
}

// Driver Code
$X = "AGGTABCVXVXCTCVXCVCXCV";
$Y = "GXTXAYVXVXCVXVX";
echo "Length of LCS is ";
echo lcs($X, $Y, strlen($X),
    strlen($Y));




