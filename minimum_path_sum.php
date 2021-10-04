<?php

$arr = array(
    array(2,1,3,4),
    array(4,0,5,7),
    array(2,1,3,4)
);

function sum($arr,$i=0,$j=0){
    if($i<=0 && $j<=0) return $arr[0][0];
    if($i==0 && $j>=1){
        return $arr[0][$j]+sum($arr,0,$j-1);
    }
    if($i>=1 && $j==0){
        return $arr[$i][0]+sum($arr,$i-1,0);
    }

    return $arr[$i][$j]+min( sum($arr,$i-1,$j), sum($arr,$i,$j-1));

}

//echo sizeof($arr[0]);

echo sum($arr,sizeof($arr)-1,sizeof($arr[0])-1);
