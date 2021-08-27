<?php
$courses = [
    'javascript',
    'Laravel',
    'PHP'
];
rsort($courses);

echo "<pre>";
// var_dump($courses);


$numbers = [
    10 => 'javascript',
    100 => 'Laravel',
    1000 => 'PHP'
];
ksort($numbers);
// var_dump($numbers);
krsort($numbers);
// var_dump($numbers);


// var_dump(array_slice($numbers,1));
// var_dump(array_chunk($courses,2));

//array_shift($courses)
//array_pop($courses)
//array_unshift($courses)
//array_push($courses)
//array_flip($courses)


var_dump(array_flip($courses));
var_dump(array_slice($courses, 1));
var_dump(array_chunk($courses, 1));

$course = array_shift($courses);
$data = array_pop($courses);
print_r($data);

array_unshift($courses, "vuejs", "css");
print_r($courses);
array_push($courses, "vuejs");
