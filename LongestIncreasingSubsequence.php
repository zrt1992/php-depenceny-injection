<?php

function longestIncreasingSubsequence($arr, $low,$high, $count)
{
    if($low>=$high) return $count;
    if ($arr[$low] < $arr[$low + 1]) {
        return longestIncreasingSubsequence($arr, $low + 1, $high,$count+1);
    }
    else {
       // echo $low;die;
        return max($count,longestIncreasingSubsequence($arr, $low + 1, $high,1));
    }
}

$arr = [ 1, 5, 7,12,13,20,1,2,3,42];
//$arr = [ 1, 5, 7,8,9];
echo longestIncreasingSubsequence($arr, $low = 0, sizeof($arr)-1,1);
