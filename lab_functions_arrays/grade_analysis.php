$students =[
    'Daniel' => 85,
    'Matthew' => 92,
    'Simon' => 78,
    'Lily' = 88,
    'Shondel' => 95
];
$scores = array_values($students);

$classAverage = average($scores);
echo "Class Average is " . round($classAverage, 2) . "\n";

foreach ($student as $name => $score){
    $grade = letterGrade($score);
    echo "$name: $score -> $garde\n";
}
