<?php
$colors = ['red', 'blue', 'green'];

$students = array(
    array('name' => 'John Doe', 'course' => 'Software Engineering', 'age' => 36, 'grade' => 3.7, 'level' => '200'),
    array('name' => 'Mark Leee', 'course' => 'Business Information', 'age' => 31, 'grade' => 3.9, 'level' => '100'),
    array('name' => 'Kerry Tim', 'course' => 'BioChemistry', 'age' => 34, 'grade' => 3.1, 'level' => '300'),
    'name' => 'Terry'
);

//echo count($students, 1);
//var_dump(current($students));
//print_r(array_keys($students, 'Terry'));
//exit;
$students[] = ['name' => 'Joy Osayawe', 'course' => 'PHP', 'age' => 21, 'grade' => 3.6, 'level' => '100'];

array_push($students,
    ['name' => 'Rosemary', 'course' => 'PHP', 'age' => 21, 'grade' => 3.6, 'level' => '100'],
    ['name' => 'Mathew', 'course' => 'Geography', 'age' => 19, 'grade' => 3.2, 'level' => '200'],
    ['name' => 'Jude', 'course' => 'Biochemistry', 'age' => 41, 'grade' => 3.8, 'level' => '300'],
    ['name' => 'Joy', 'course' => 'Information Technology', 'age' => 39, 'grade' => 3.7, 'level' => '400']
);

//print_r(array_pop($students));
print_r(end($students));
//echo count($students);
//exit;

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
