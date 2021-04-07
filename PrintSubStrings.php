<?php
$text = "txccbcc";
//echo lenght($text);

function subString($text,$size,$i){
    if($size==$i) return;
    echo $text[$i]." ";
    subString($text,$size,$i+1);
    subString($text,$size,$i+2);
}
subString($text,strlen($text)-1,0);
