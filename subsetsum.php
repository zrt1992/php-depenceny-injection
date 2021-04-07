<pre/>
<?php

$total = [];
function isSubsetSum(&$set, $size, $i, $sum, $key)
{
    global $total;

    if ($i == $size) {
        if (isset($total[$sum + $key])) {
            return true;
        } else {
            $total[$sum] = 0;
            return false;
        }
    }
    return isSubsetSum($set, $size, $i + 1, $sum + $set[$i], $key) || isSubsetSum($set, $size, $i + 1, $sum, $key);
}

function SubsetSum(&$set, $size, $i, $sum, $key)
{
    if ($i == $size) {
        echo $sum."<br> ";
        if ($key == $sum && $sum!=0) {
            return true;
        } else {
            return false;
        }
    }
    return SubsetSum($set, $size, $i + 1, $sum + $set[$i], $key) || SubsetSum($set, $size, $i + 1, $sum, $key);
}

$set = [1, 2];
var_dump(SubsetSum($set, sizeof($set), 0, 0, 0));
//print_r($total);




