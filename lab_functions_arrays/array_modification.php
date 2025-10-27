<?php
// Start with [1, 2, 3]
$array = [1, 2, 3];

// Use array_push to add 4
array_push($array, 4);
echo "After pushing 4: " . implode(", ", $array) . "\n";

// Use array_pop to remove the last element
array_pop($array);
echo "After popping: " . implode(", ", $array) . "\n";

// Merge with [5, 6]
$array = array_merge($array, [5, 6]);
echo "After merging: " . implode(", ", $array) . "\n";
