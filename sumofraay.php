<?php
$arr= ["a","b","c"];

function printSum($arr,$i=0,$j=0,$size,$string){
    if($j>$size) {
       echo $string;
       echo '<br>';
       return;
    }
     printSum($arr,$i=0,$j+1,$size,$string.$arr[$j]) ;
//    echo $string;die;
//    printSum($arr,$i+1,$j=0,sizeof($arr)-2,$string="");
}
echo printSum($arr,$i=0,$j=0,sizeof($arr)-1,$string="");
//echo printSum($arr,$i+1,$j=0,sizeof($arr)-2,$string="");
