<?php 

function checkPalindrome($str){   
    if (strrev($str) == $str){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   

$input = "madam";  
if(checkPalindrome($input)){   
    echo "Palindrome";   
}  
else {   
echo "Not a Palindrome";   
} 
?>  