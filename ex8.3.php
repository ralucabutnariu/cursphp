<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 2/10/2017
 * Time: 12:20 PM
 */

$n = 10;
$arr = generateRandomNumbers($n);

var_dump($arr);
echo "\n\n";

$powers = array (4, 7, 9, 3, 2);

foreach ($arr as $elem) {
    foreach ($powers as $power) {
        if (is_power_of($elem, $power)) {
            echo $elem . ' is power of '.$power."\n";
        }
    }
}

/**
 * Generates an array of $elementNumber random numbers
 * @param $elementNumber
 * @return array
 */
function generateRandomNumbers ($elementNumber) {
    $numbers = array();
    for ($i = 0; $i < $elementNumber; $i++) {
        $numbers[] = rand(1, 100);
    }
    return $numbers;
}

/**
 * Checks if $nr is power of $power
 * @param int $nr
 * @param int $power
 * @return bool
 */
function is_power_of($nr, $power) {
    while ($nr % $power == 0) {
         $nr = $nr / $power;
         if($nr == 1) {
             return true;
         }
    }
    return false;
}

?>

