<?php 

// You need to write a program in PHP using for...each loop to remove specific 
// elements by value from an array using PHP program.

$months = ['january','febuary','march','april','may','june','july','august','september','october','november','december'];
 


$delete = 'january';

foreach ($months as $key => $value) {  
    
    if ($value == $delete) {
        unset($months[$key]);
    }
      
}

print_r ($months);



?>