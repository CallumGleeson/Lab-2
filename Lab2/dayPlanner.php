<?php
$dayNumber = 1; // 1 = Monday, 7 = Sunday.

switch ($dayNumber) {
    case 1:
        echo "Monday: Gym\n";
        break;
    case 2:
        echo "Tuesday: Study group\n";
        break;
    case 3:
        echo "Wednesday: Football training\n";
        break;
    case 4:
        echo "Thursday: Read a book\n";
        break;
    case 5:
        echo "Friday: Movie night\n";
        break;
    case 6:
        echo "Saturday: Meet friends\n";
        break;
    case 7:
        echo "Sunday: Rest\n";
        break;
    default:
        echo "Invalid day number. Enter a number from 1 to 7.\n";
        break;
}
