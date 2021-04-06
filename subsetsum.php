<?php
function isSubsetSum($set, $n, $sum)
{
    if ($sum == 0)
        return $sum;
    if ($n == 0)
        return $sum;
    if ($set[$n - 1] > $sum) return isSubsetSum($set, $n - 1, $sum);
    return  isSubsetSum($set, $n - 1, $sum) + isSubsetSum($set, $n - 1, $sum - $set[$n - 1]);
}
$set = [1,2,3];
echo isSubsetSum($set,sizeof($set),0);




