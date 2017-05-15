<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 5/15/2017
 * Time: 7:04 PM
 */

/* We want to display a greeting */
$greeting = "Hello";
$name = "Bobby";

// Hello
echo $greeting;
echo "\n";

// Bobby
echo $name;
echo "\n";

// Hello Bobby
echo $greeting.' '.$name;
echo "\n";

// Hello, Bobby
$niceGreeting = $greeting.', '.$name;
echo $niceGreeting;
echo "\n";

// Hello, Bobby!
$niceGreeting = $greeting.", ".$name."!";
echo $niceGreeting."\n";

// Bobby, Hello!
echo $name.", ".$greeting."!"."\n";

?>

