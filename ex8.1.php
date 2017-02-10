<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 2/10/2017
 * Time: 1:21 PM
 */

$n = 10;
$arr = generateRandomNumbers($n);

var_dump($arr);
echo "\n\n";

foreach ($arr as $elem) {
    if (isPrimeNumber($elem)) {
        echo $elem . " este numar prim \n";
    } else {
        echo $elem. " nu este numar prim \n";
    }
}

/**
 * Generate an array of $numberOfElements elements
 * @param int $numberOfElements
 * @return array
 */
function generateRandomNumbers($numberOfElements)
{
    $generatedArray = array();
    for ($i = 0; $i < $numberOfElements; $i++) {
        $generatedArray[] = rand(1, 100);
    }
    return $generatedArray;
}

/**
 * @param int $nr
 * @return bool
 */
function isPrimeNumber($nr) {
    for ($i=2; $i <= sqrt($nr); $i++) {
        if ($nr % $i==0) {
            return false;
        }
    }
    return true;
}
