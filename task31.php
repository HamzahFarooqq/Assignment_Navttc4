<?php 

// Write a program to calculate factorial of a number using for loop in PHP.

$n = 5;
$factorial = 1;

for ($i= $n; $i > 0; $i--) {

     $factorial = $factorial * $i ;     
    
}

    echo ' the factorial of number '. $n . ' is : '. $factorial;


?>