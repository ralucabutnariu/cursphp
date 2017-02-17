<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 2/17/2017
 * Time: 3:09 PM
 */

$array = array();
for ($k=0;$k<10;$k++) {
    $array[] = rand(0,100);
}

var_dump($array);

foreach ($array as $element){
    if($element%2 == 1){
        echo $element.'! = '.factorial($element)."\n";
    }
}

/**
 * @brief
 * @param $nr
 * @return int
 */
function factorial($nr){
    $factorial = 1;
    for($i=1;$i<=$nr;$i++){
        $factorial *= $i;
    }
    return $factorial;
}

?>