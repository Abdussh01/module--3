<?php
$studentGrades = [
    ['name' => 'Nayeem', 'Math' => 90, 'English' => 85, 'Science' => 92],
    ['name' => 'Mynul', 'Math' => 88, 'English' => 76, 'Science' => 85],
    ['name' => 'Tarek', 'Math' => 95, 'English' => 91, 'Science' => 87]
];

function grade($studentGrades) {
    foreach ($studentGrades as $student) {
        $name = $student['name'];
        $mathGrade = $student['Math'];
        $englishGrade = $student['English'];
        $scienceGrade = $student['Science'];
        
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;
        
        echo "$name's average grade: $averageGrade\n";
    }
}

grade($studentGrades);
