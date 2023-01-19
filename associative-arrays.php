<?php

$student_info_keys = [
    'name',
    'age',
    'dob'
];

$students = [
    ['Shaun', 44, '1978-12-22'],
    ['1997-02-01','Gagandeep', 26],
    ['Maria', 32, '1986-03-01']        
];

// above: array index order need to match for mapping

// associative (key/value pairs)

$aa_students = [
    [
        "name" => "Mic Riewe",
        "age" => 44,
        "dob" => "1978-12-22"
    ],
    [
        "name" => "Armit",
        "age" => 22,
        "dob" => "2001-01-18"
    ]
];

/*
foreach($aa_students as $student) {
    echo $student["age"];
}
*/


?>