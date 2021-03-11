<?php

function dateDifference($date1, $date2) {

    $diff = abs(strtotime($date1) - strtotime($date2));

    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    printf("%d years, %d months, %d days\n", $years, $months, $days);

}

dateDifference('2019-05-31', '2018-04-05');

?>