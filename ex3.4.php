<?php

/**
  Write a function compare(x, y), x and y integer, that compares x and y:
    If x < y writes “less”
    If x = y writes “equal”
    If x > y writes “greater”
 */

/**
 * @param $a
 * @param $b
 * @return string
 */
function compare($a, $b)
{
    if ($a < $b) {
        return 'less than';
    }

    // Why not elseif ?
    if($a == $b) {
        return 'equal to';
    }

    // Why not else ?
    return 'greater than';
}

$x = 1;
$y = 2;
echo $x." is ".compare($x, $y)." ".$y;
echo "\n";

$x = 1;
$y = 1;
echo $x." is ".compare($x, $y)." ".$y;
echo "\n";

$x = 2;
$y = 1.5;
echo $x." is ".compare($x, $y)." ".$y;
echo "\n";
?>


