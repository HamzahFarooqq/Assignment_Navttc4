<?php 

// Write a PHP function that checks whether a string is all lowercase.

$name = 'Pakistan';

// var_dump(ctype_lower($name));

$check = ctype_lower($name);

if ($check == true) {
    echo 'the string is all lowercase';
} else {
    echo 'the string is not all lowercase';
}

?>