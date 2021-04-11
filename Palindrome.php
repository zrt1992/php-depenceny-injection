<?php
function findMinInsertions($str, $l, $h)
{
    if ($l > $h) return 100000000000;
    if ($l == $h) return 0;
    if ($l == $h - 1) return ($str[$l] == $str[$h]) ? 0 : 1;

    return ($str[$l] == $str[$h]) ?
        findMinInsertions($str, $l + 1, $h - 1) :
        (min(findMinInsertions($str, $l, $h - 1),
                findMinInsertions($str, $l + 1, $h)) + 1);
}

$store = [];
function findMinInsertions1($str, $l, $h)
{
    global $store;
    if (isset($store[$l . $h])) {
        return $store[$l . $h];
    } else {
        if ($l > $h) return 100000000000;
        if ($l == $h) return 0;
        if ($l == $h - 1) return ($str[$l] == $str[$h]) ? 0 : 1;

        if ($str[$l] == $str[$h]) {
            findMinInsertions1($str, $l + 1, $h - 1);
        } else {
            $store[$l . $h] = (min(findMinInsertions1($str, $l, $h - 1),
                    findMinInsertions1($str, $l + 1, $h)) + 1);
            return $store[$l . $h];
        }


    }

}

$str = "abcdefghijklmnopqrstuvwxyz";
echo findMinInsertions1($str, 0, strlen($str) - 1);
echo '<pre>';
print_r($store);
