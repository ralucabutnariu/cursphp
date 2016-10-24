<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 10/24/2016
 * Time: 6:11 PM
 */

/**
 *
 * Write a function that receives an array with personal data of 3 persons:
 *   array(
 *        0 => array(
 *            0 => "andreea",
 *            1 => "Ionescu"
 *        ),
 *        1 => array(
 *            0 => "Alin",
 *            1 => "PopEscu"
 *        ),
 *        2 => array(
 *            0 => "ioanA",
 *            1 => “andreescu"
 *       )
 *    )
 *
 *    and returns an array formated ("Lastname Firstname") and sorted alphabetically:
 *
 *  array(
 *      0 => "Andreescu Ioana",
 *      1 => "Ionescu Andreea",
 *      2 => "Popescu Alin"
 *  )
 *
 */

/**
 * @brief Processing array elements and sorting the array
 * @param $personsArray
 * @return array
 */
function processPersons($personsArray) {
    $finalArray = array();

    $person = $personsArray[0];
    $firstName =  $person[0];
    $lastName =  $person[1];
    $personInfoFormatted = formatName($lastName, $firstName);
    $finalArray[] = $personInfoFormatted;

    $person = $personsArray[1];
    $firstName =  $person[0];
    $lastName =  $person[1];
    $personInfoFormatted = formatName($lastName, $firstName);
    $finalArray[] = $personInfoFormatted;

    $person = $personsArray[2];
    $firstName =  $person[0];
    $lastName =  $person[1];
    $personInfoFormatted = formatName($lastName, $firstName);
    $finalArray[] = $personInfoFormatted;

    sort($finalArray);

    return $finalArray;
}

/**
 * @brief Formatting a persons’s full name ("Lastname Firstname")
 * @param $lastName
 * @param $firstName
 * @return string
 */
function formatName($lastName, $firstName) {
    return ucwords(strtolower($lastName.' '.$firstName));
}

// Input array containing personal data of 3 persons
$persons = array(
    array(
        "andreea",
        "Ionescu"
    ),
    array(
        "Alin",
        "PopEscu"
    ),
    array(
        "ioanA",
        "andreescu"
    )
);

$persons = processPersons($persons);
var_dump($persons);
?>
