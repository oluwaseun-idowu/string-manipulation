
<?php
// PHP program to Remove 
// Special Character From String
    
// Function to remove the spacial 
function RemoveSpecialChar($str) {
      
    // Using str_replace() function 
    // to replace the word 
    $res = str_replace(array('/', '\'', '"',
    ',' , ';', '<', '>' ), '', $str);
      
    // Returning the result 
    return $res;
    }
  
// Given string
$str = "LAW/12/13/0002"; 
  
// Function calling
$str1 = RemoveSpecialChar($str); 
  
// Printing the result
echo $str1; 
?>