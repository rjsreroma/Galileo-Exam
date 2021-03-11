<?php

# Display the value that have the most number occurrence; in case of tie arrange it in
# alphabetical order.

$arr = array("Marco", "Marco", "Marvin", "Marvin", "Marco", "Marvin", "Christian"); 
ksort($arr);
    
$arr_freq = array_count_values($arr); 
        
arsort($arr_freq);
    
$new_arr = array_keys($arr_freq);
    
echo $new_arr[0]; 

?>