
<?php 

// use the Switch statement of PHP to display the current day of the week. 

$day = date ("l");

switch ($day) {

    case 'Monday':
        echo "today is monday.";
        break;
    
    case 'Tuesday':
        echo 'today is tuesday.';
        break;
    case 'Wednesday':
        echo 'today is wednesday.';
        break;
    case 'Thurdsay':
        echo 'today is thurday.';
        break;
    case 'Friday':
        echo "today is friday.";
        break;
    case 'Saturday':
        echo 'today is saturday.';
        break;
    case 'Sunday':
        echo 'today is sunday.';
        break;
    default:
        echo 'please write correct code';

}


?>