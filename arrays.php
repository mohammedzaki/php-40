<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 11/13/20
 * Time: 10:32 AM
 */


/* First method to create array. */
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $value) {
    echo "Value is \"$value\" <br />";
}
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";

$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
foreach ($numbers as $value) {
    echo "Value is $value <br />";
}

$salaries = [
    "mohammad" => 1,
    "qadir"    => 1000,
    "zara"     => 500
];

function getValByIndex($arr, $index)
{
    return $arr[$index];
}

$salaries[0] = "sdffs";

echo "Salary of mohammad is " . $salaries['mohammad'] . "<br />";
echo "Salary of qadir is " . $salaries['qadir'] . "<br />";
echo "Salary of zara is " . getValByIndex($salaries, 1) . "<br />";


$marks = [
    "mohammad" => [
        "physics"   => 35,
        "maths"     => 30,
        "chemistry" => 39
    ],
    "zara"     => array
    (
        "physics"   => 31,
        "maths"     => 22,
        "chemistry" => 39
    ),
    "qadir"    => array
    (
        "physics"   => 30,
        "maths"     => 32,
        "chemistry" => 29
    ),

];

foreach ($marks as $key => $mark) {
    echo "Key is: $key" ;
}
/* Accessing multi-dimensional array values */
echo "Marks for mohammad in physics : ";
echo $marks['mohammad']['physics'] . "<br />";
echo "Marks for qadir in maths : ";
echo "<br><div style='color: red' > Test txt color</div> <br>";
echo $marks['qadir']['maths'] . "<br />";

echo "Marks for zara in chemistry : ";
echo $marks['zara']['chemistry'] . "<br />";