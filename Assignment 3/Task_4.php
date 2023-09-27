<?php

$studentGrades = [
    ["Math" => 90, "English" => 85, "Science" => 92],
    ["Math" => 78, "English" => 89, "Science" => 88],
    ["Math" => 92, "English" => 91, "Science" => 95]
];

function calculateAverageGrades($grades) {
    foreach ($grades as $index => $student) {
        $averageGrade = array_sum($student) / count($student);
        echo "Student " . ($index + 1) . " - Average Grade: " . $averageGrade . "\n";
    }
}


calculateAverageGrades($studentGrades);
?>
