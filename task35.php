<?php 

// Write a function to sort an array.

 $numbers = [10,5,2,5,7,8,4,3,5];

 sort($numbers);
//  rsort($numbers);
//  ksort($numbers);

//  $numLength = count($numbers);

//  for ($x=0 ; $x < $numLength; $x++) {

//     echo $numbers[$x];
//     echo '<br>';
//  }


foreach ($numbers as $values) {
   echo $values;
   echo '<br>';
}




?>