<?php

# Sort the array in ascending order; if the value is an odd number, round it up to nearest tens.

$n = array(9863, 7127, 2020, 80, 131, 55, 100);
$odds = array();
$even = array();
$oddsRound = array();
foreach($n as $val) {
    if($val % 2 == 0) {
        $even[] = $val;
    } else {
        $odds[] = $val;
    }
}
foreach($odds as $num) {
    $num = round($num, -1);
    $oddsRound[] = $num;
}

$result = array_merge($oddsRound, $even);
sort($result);

foreach($result as $res) {
    echo $res." ";
}

?>