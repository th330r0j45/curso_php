<?php


$courses = [
    'fronted'=>'javascript'
    ,'framework'=>'Laravel',
    'backed'=>'PHP'];



foreach ($courses as $course) {
    # code...
    echo "$course:  <br>";
}
function upper($course,$key){
    echo strtoupper($course)  .": $key <br>"; 
}
array_walk($courses,'upper');

/**
 * array_key_exists('fronted',$courses);
 * in_array('javascript',$courses);
 * array_keys($courses)
 * array_values($courses);
 */

echo "array_key_exists <br>";
$existCourse = array_key_exists('framework',$courses);
var_dump($existCourse);
echo "<br>";

echo "in_array <br>";
$inArrayCourse = in_array('javascript', $courses);
var_dump($inArrayCourse);
echo "<br>";

echo "array_values <br>";
$arrayValues = array_values($courses);
var_dump($arrayValues);
echo "<br>";

echo "array_keys <br>";
$arrayKeys = array_keys($courses);
var_dump($arrayKeys);