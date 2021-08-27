<?php


//Valores
function greet($name)
{
    return "Hello, $name";
}

echo greet('Mateo');
echo ('<br>');

//Referencias
$course = 'PHP';
function patch($course)
{
    $course = 'Laravel ';
    echo $course; //Laravel
}

patch($course);
echo $course; //Laravel
echo ('<br>');

//Predeterminado
function Predeterminado($name = 'Mateo')
{
    return "Hello, $name";
    echo ('<br>');
}
echo Predeterminado();
echo ('<br>');
echo Predeterminado('Abel');
