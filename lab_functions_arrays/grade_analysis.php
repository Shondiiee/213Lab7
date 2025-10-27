<?php
include 'average.php';
include 'letterGrade.php';
$students = [
    "Daniel" => 85,
    "Matthew" => 92,
    "Simon" => 78,
    "Lily" => 88,
    "Shondel" => 95
];

$classAvg = average(array_values($students));
echo "Class Average is " . $classAvg . "\n";


foreach ($students as $name => $score) {
    $grade = letterGrade($score);
    echo "$name's grade: " . $grade . "\n";
}
?>
