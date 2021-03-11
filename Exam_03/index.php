<?php 

function isPerfectSquare($x) 
{ 
    $s = (int)(sqrt($x)); 
    return ($s * $s == $x); 
} 

function isFibonacci($n) 
{ 
    return isPerfectSquare(5 * $n * $n + 4) ||  
           isPerfectSquare(5 * $n * $n - 4); 
} 
  
for ($i = 1; $i <= 10; $i++) 
if(isFibonacci($i)) 
echo "$i is a Fibonacci Number \n"; 
else
echo "$i is not Fibonacci Number \n" ; 
  
?> 