<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 10/25/2016
 * Time: 5:51 PM
 */

/**
 * Write a function to calculate the determinant of a 3x3 matrix given as an argument
 */


/**
 * @param array $matrix
 * @return float
 */
function calculateMatrixDeterminant($matrix) {
    $det =   $matrix[0][0] * $matrix[1][1] * $matrix[2][2]
           + $matrix[0][1] * $matrix[1][2] * $matrix[2][0]
           + $matrix[0][2] * $matrix[1][0] * $matrix[2][1]
           - $matrix[0][2] * $matrix[1][1] * $matrix[2][0]
           - $matrix[0][1] * $matrix[1][0] * $matrix[2][2]
           - $matrix[0][0] * $matrix[1][2] * $matrix[2][1];
    return $det;
}

/**
 * Define the matrix as an array of arrays
 * No keys declared means the keys will be assigned by default: 0, 1, 2
 */
$myMatrix = array(
    array(0, 1, 2),
    array(3, 1, 7),
    array(1, 3, 4)
);
echo "\n\nMATRIX:\n";
var_dump($myMatrix);

/**
 * Calculating myMatrix's determinant
 */
$det = calculateMatrixDeterminant($myMatrix);
echo "\n\nMATRIX DETERMINANT:\n";
var_dump($det);

?>

