<?php
// Given array
$grades = [90, 80, 90, 70, 80];

// Use array_count_values() to count occurrences
$counts = array_count_values($grades);

// Print the counts
foreach ($counts as $grade => $count) {
    echo "$grade appears $count time(s)\n";
}
