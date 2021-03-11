<?php 

# Create a PHP function using DO WHILE loop that will display all odd numbers from 0-10.

$n = 0;

do {

    if($n % 2 != 0) {
        echo $n . " ";
    }
    $n++;
} 

while ($n <= 10);

?>