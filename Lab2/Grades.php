<?php
$score = 90; // Change this to a number from 0 to 100.

if ($score >= 90) {
    $grade = 'A';
} elseif ($score >= 80) {
    $grade = 'B';
} elseif ($score >= 70) {
    $grade = 'C';
} elseif ($score >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Score: $score\n";
echo "Grade: $grade\n";

if ($score >= 40) {
    echo "Pass\n";
} else {
    echo "Fail\n";
}

// Try changing $score above to "90" (a string) and run this file again.
// == converts types when comparing; === requires both value and type to match.
echo 'Equal to integer 90 with ==: ' . (($score == 90) ? 'true' : 'false') . "\n";
echo 'Identical to integer 90 with ===: ' . (($score === 90) ? 'true' : 'false') . "\n";
