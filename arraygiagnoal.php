<?php
function func($i){
    if($i%2) return 0;
    else return 1;
}
$i=3;
$i=func($i);
$i=func($i);
echo $i;
