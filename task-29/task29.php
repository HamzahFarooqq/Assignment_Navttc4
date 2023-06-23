<?php 

// Use the If...else statement of PHP to write a code to Display
// “Good Morning” or “Good Afternoon” according to current time

$time = date('H');

if ($time > 6 and $time < 12) {
    echo 'good morning';
}   else {
    echo 'good afternoon';
}

?>