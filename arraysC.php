<?php

# Display the item that is not repetitive.

$arr = array("red", "blue", "black", "red", "blue", "blue", "red", "gold"); 
    
$arr_freq = array_count_values($arr); 
        
arsort($arr_freq);

$new_arr = array_keys($arr_freq);
    
$key = array_search(1, $arr_freq);
echo($key);
?>