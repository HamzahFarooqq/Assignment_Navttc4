<?php 

// Write a Program to create following pattern using while loop:
// *
// **
// ***
// ****
// *****
// ******
// *******
// ********




$i = 0;

while($i < 8){

    $j = 0;

    while($j <= $i){
        echo "*";
        $j++;
    }

    $i++;
    echo "<br>";

}


?>