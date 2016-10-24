<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 10/24/2016
 * Time: 6:11 PM
 */

/**
 *
 * Define 5 arrays of 3 numbers and print them in the ascending order of their arithmetic mean.
 *
 */

/**
 * @brief Calculating arithmetic mean of 3 numbers
 * @param float $a
 * @param float $b
 * @param float $c
 * @return float
 */
function arithmeticMean($a, $b, $c) {
    $arithmeticMean = ($a + $b + $c) / 3;
    return $arithmeticMean;
}

/**
 * Defining the 5 arrays of numbers
 */
$array1 = array(203, 1900, 23);
$array2 = array(1, 2, 3);
$array3 = array(431, -1032, -433);
$array4 = array(-10, 20, 34);
$array5 = array(7, 8, 9);

/**
 * Calculating arithmetic mean of the 5 arrays
 */
$arithmeticMean1 = arithmeticMean($array1[0], $array1[1], $array1[2]);
$arithmeticMean2 = arithmeticMean($array2[0], $array2[1], $array2[2]);
$arithmeticMean3 = arithmeticMean($array3[0], $array3[1], $array3[2]);
$arithmeticMean4 = arithmeticMean($array4[0], $array4[1], $array4[2]);
$arithmeticMean5 = arithmeticMean($array5[0], $array5[1], $array5[2]);

/**
 * Creating array of initial arrays
 */
$arrays = array($array1, $array2, $array3, $array4, $array5);
echo "\n\nINITIAL ARRAY:\n";
var_dump($arrays);

/**
 * Creating array of arithmetic means
 */
$arithmeticMeans = array($arithmeticMean1, $arithmeticMean2, $arithmeticMean3, $arithmeticMean4, $arithmeticMean5);
echo "\n\nARITHMETIC MEANS ARRAY:\n";
var_dump($arithmeticMeans);

/**
 * What we notice is that both arrays have corresponding keys:
 *       $arrays[0] = $array1 and $arithmeticMeans[0] = $arithmeticMean1,
 *       $arrays[1] = $array2 and $arithmeticMeans[1] = $arithmeticMean2,
 *       ...
 * So sorting $arithmeticMeans with key preservation (using asort) will generate an ordered array keeping the original keys
  */


/**
 * Sorting $arithmeticMeans
 */
asort($arithmeticMeans);
echo "\n\nSORTED ARITHMETIC MEANS ARRAY:\n";
var_dump($arithmeticMeans);

/**
 * What we notice:
 *      - first $arithmeticMean is the one with key 2
 *      - because both arrays have corresponding keys, it results that first element in the sorted array the one with key 2
 * We can use associations between sorted array's keys and initial $arrays to create the sorted array
 */
$keys = array_keys($arithmeticMeans);
echo "\n\nKEY ORDER IN ARYTHMETIC MEANS ARRAY IS THE ONE WE SHOULD USE TO DISPLAY THE SORTED ARRAY:\n";
var_dump($keys);

/**
 * uSING associations between sorted array's keys and initial $arrays to create the sorted array
 */
$sortedArray = array(
    $arrays[$keys[0]],
    $arrays[$keys[1]],
    $arrays[$keys[2]],
    $arrays[$keys[3]],
    $arrays[$keys[4]]
);
echo "\n\nSORTED ARRAY BY ARITHMETIC MEANS:\n";
var_dump($sortedArray);


echo "\n\n";
?>


