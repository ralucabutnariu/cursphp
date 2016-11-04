<?php

/**
    Write a function that checks a person by age, gender and location and return of the form: “Name, Age_category, M/F, place” (e.g: “Mary, Child, F, nonBucharest”)
    Age category:
    Child if age <= 13
    Teen if age > 14 and < 18
    Adult if age >= 18 and age <= 55
    Old if age > 55
    Gender
    Given as “male” or “Female”
    must be formatted as “M” or “F”
    Place
    If location is Bucharest, place is Bucharest
    If location is not Bucharest, place is nonBucharest
 */

$person = array(
    'name' => 'ionEL',
    'age' => 0,
    'gender' => 'mAle',
    'location' => 'Ploiesti'
);

checkPerson($person);

/***************************************************** Main function ************************************************/

function checkPerson($person)
{
    $errors = validateData($person);

    if(count($errors) > 0) {
        noticeErrors($errors, $person);
        return;
    }

    echo formatData($person);
}

/***************************************************** Validation functions ************************************************/

function validateData($person)
{
    $errors = validateAge($person);
    $errors = array_merge($errors, validateName($person));
    $errors = array_merge($errors, validateGender($person));
    $errors = array_merge($errors, validateLocation($person));
    return $errors;
}

function validateAge($person)
{
    $errors = array();
    if(!isset($person['age'])) {
        $errors[] = 'Age not provided!';
    } elseif(!is_numeric($person['age'])) {
        $errors[] = 'Age not numeric!';
    } elseif($person['age'] <= 0) {
        $errors[] = 'Age less or equal to 0!';
    }
    return $errors;
}

function validateGender($person)
{
    $errors = validateNotEmptyValueForKey($person, 'gender');
    if(count($errors) == 0) {
        $allowedGenders = array('male', 'female');
        if (!in_array(strtolower(trim($person['gender'])), $allowedGenders)) {
            $errors[] = 'Gender is not allowed!';
        }
    }
    return $errors;
}

function validateName($person)
{
    return validateNotEmptyValueForKey($person, 'name');
}

function validateLocation($person)
{
    return validateNotEmptyValueForKey($person, 'location');
}

function validateNotEmptyValueForKey($array, $key)
{
    $errors = array();

    if(!isset($array[$key])) {
        $errors[] = ucfirst(strtolower($key)).' not provided!';
    } elseif(trim($array[$key]) == '') {
        $errors[] = ucfirst(strtolower($key)).' is empty!';
    }
    return $errors;
}

/***************************************************** Format functions ************************************************/

function formatData($person)
{
    $name = formatName($person['name']);
    $age = formatAge($person['age']);
    $gender = formatGender($person['gender']);
    $location = formatLocation($person['location']);

    $finalInfo = $name.', '.$age.', '.$gender.', '.$location;

    return $finalInfo;
}

function formatName($name)
{
    return ucfirst(strtolower(trim($name)));
}

function formatAge($age)
{
    if($age <= 13) {
        return 'Child';
    }
    if($age < 18) {
        return 'Teen';
    }
    if($age <= 55) {
        return 'Adult';
    }
    return 'Old';
}

function formatGender($gender)
{
    $gender = strtolower(trim($gender));
    if($gender == 'male') {
        return 'M';
    }
    return 'F';
}

function formatLocation($location)
{
    $location = strtolower(trim($location));
    if($location == 'bucuresti' || $location == 'bucharest') {
        return 'Bucharest';
    }
    return 'nonBucharest';
}

/***************************************************** Helper functions ************************************************/

function noticeErrors($errors, $person)
{
    echo 'Validation errors occured for person: '.serialize($person);
    echo '<br><br>'.implode('<br>', $errors);
}
?>


