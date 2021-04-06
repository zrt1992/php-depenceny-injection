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
            $total[$sum]=0;
            return  false;
        }
    }
    return isSubsetSum($set, $size, $i + 1, $sum + $set[$i], $key) ||   isSubsetSum($set, $size, $i + 1, $sum, $key);


}

$set = [1, 2, 3];
var_dump(isSubsetSum($set, sizeof($set), 0, 0, 12));
print_r($total);




