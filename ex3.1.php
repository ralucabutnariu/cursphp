<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 10/28/2016
 * Time: 9:56 AM
 */

/**
 * Write a function that checks if a number is positive (>=0) or negative (<0)
 * - If positive print ‘Positive’
 * - If negative print ‘Negative’
 */

/**
 * @param int $a
 */
function checkNumber1($a) {
    if ($a >= 0) {
        echo "Positive";
     } else {
        echo "Negative";
     }
}

/**
 * @param int $a
 */
function checkNumber2($a) {
    if (!($a >= 0)) {
        echo "Negative";
    } else {
        echo "Positive";
    }
}

/**
 * @param int $a
 */
function checkNumber3($a) {
    if ($a < 0) {
        echo "Negative";
    } else {
        echo "Positive";
    }
}

/**
 * @param int $a
 */
function checkNumber4($a) {
    if ($a >= 0) {
        echo "Positive";
    }
    if ($a < 0) {
        echo "Negative";
    }
}

/**
 * Check a positive number by all 3 methods
 */
checkNumber1(3);
echo "\n";
checkNumber2(3);
echo "\n";
checkNumber3(3);
echo "\n";
checkNumber4(3);
echo "\n";
echo "\n";

/**
 * Check a negative number by all 3 methods
 */
checkNumber1(-3);
echo "\n";
checkNumber2(-3);
echo "\n";
checkNumber3(-3);
echo "\n";
checkNumber4(-3);
echo "\n";
?>