<?php
$arr = ["a","b","c","d","e"];
//echo lenght($text);


for($i=0;$i<=sizeof($arr)-1;$i++){
    $text="";
    for($j=$i;$j<=sizeof($arr)-1;$j++){

       //// echo $arr[$j]." ";
         $text.=$arr[$j];
        echo $text." ";
    }
   // die;
    $text="";


}


//function subSet($i=0,$j,$size,$arr,$text){
//    if($i>$size || $j<0) {
//        return;
//    }
//    $t="";
//    for($k=$i;$k<=$j;$k++){
//        $t.=$arr[$k];
//    }
//    echo $t." ";
//
//
//    subSet($i+1,$j,$size,$arr,$text.$arr[$i]);
//    subSet($i,$j-1,$size,$arr,$text.$arr[$j]);
//}
//subSet($i=0,sizeof($arr)-1,sizeof($arr)-1,$arr,$text="");
//for($k=0;$k<sizeof($arr);$k++){
//    for($i=$k;$i<sizeof($arr);$i++){
//        $sum="";
//        for($j=$k;$j<=$i;$j++){
//           $sum.=$arr[$j];
//        }
//        echo  $sum."<br>";
//    }
//}

//for($l=0;$l<sizeof($arr);$l++){
//    for($r=$l;$r<sizeof($arr);$r++){
//        echo $arr[$r];
//    }
//    echo "<br>";
//}

//function star($i,$size,$text){
//    echo $text."<br>";
//
//    if($i>$size) return;
//    star($i+1,$size,$text."*");
//
//
//}
//star($i=0,4,"");


