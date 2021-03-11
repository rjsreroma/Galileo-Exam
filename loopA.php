<?php 

# Create a PHP function using WHILE loop that will sum all even numbers from 0-10.

$total = 0;
$n = 0;

while ($n <= 10)
{
    if ($n % 2 == 0)
    {
        $total = $total + $n;
    }
    $n++;
}

echo $total;

?>