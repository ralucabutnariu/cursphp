<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 5/15/2017
 * Time: 7:15 PM
 */

/* We want to calculate */
//Sum: 12
//Composition: 32
//Difference 1: 4
//Difference 2: -4
//Quotient 1: 2
//Quotient 2: 0.5

$x1 = 8;
$x2 = 4;

// Sum
echo 'Sum: ';
echo $x1 + $x2;
echo "\n";

// Composition
echo 'Composition: ';
$composition = $x1 * $x2;
echo $composition;
echo "\n";

// Difference
function difference($a, $b)
{
    $diff = $a - $b;
    echo $diff;
}
echo 'Difference 1: ';
difference($x1, $x2);
echo "\n";

echo 'Difference 2: ';
difference($x2, $x1);
echo "\n";

// Quotient
echo 'Quotient 1: ';
$diff =  $x1 / $x2;
echo $diff."\n";

echo 'Quotient 2: ';
$diff =  $x2 / $x1;
echo $diff."\n";
?> 
