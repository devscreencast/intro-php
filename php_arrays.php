<?php
$colors = ['red', 'blue', 'green'];

$students = array(
    array('name' => 'John Doe', 'course' => 'Software Engineering', 'age' => 36, 'grade' => 3.7, 'level' => '200'),
    array('name' => 'Mark Leee', 'course' => 'Business Information', 'age' => 31, 'grade' => 3.9, 'level' => '100'),
    array('name' => 'Kerry Tim', 'course' => 'BioChemistry', 'age' => 34, 'grade' => 3.1, 'level' => '300'),
    'name' => 'Terry'
);

echo "<h2>List of students </h2>";

foreach ($students as $key => $value) {
    echo "<ul>";
    if ( is_array($value) ) {
        foreach ($value as $attribute => $val ) {
            echo "<li> $attribute => $val </li>";
        }
    }else {
        echo "<li> $key => $value </li>";
    }
    
    echo "</ul><hr />";
}
