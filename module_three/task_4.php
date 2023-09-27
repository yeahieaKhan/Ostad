<?php
// Function to calculate and print average grades for each student
$studentGrades =[
    "Student 1" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Student 2" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Student 3" => ["Math" => 75, "English" => 82, "Science" => 88],

];
    

function grateAvarage($studentGrades) {
    foreach ($studentGrades as $student => $marks) {
        // print_r($marks);
        // echo $student ;
        $total = array_sum($marks);
        $count = count($marks);
        $average = $total / $count;

        echo " $student Average grade for =  $average\n" ."</br>";
    }
}

// Create a multidimensional array with student grades

// Call the function to calculate and print average grades
grateAvarage($studentGrades);
?>
