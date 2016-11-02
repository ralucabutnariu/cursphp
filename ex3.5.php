<?php

/**
  Write a function printSeason() that checks the season the current day is in.
  Use function date to find the current month
  Use if to check the current month and return the corresponding season
 */

function checkTodaySeason1()
{
    $todayMonth = date("n");

    if ($todayMonth == 1 || $todayMonth == 2 || $todayMonth == 12) {
        $season = 'Winter';
    } elseif($todayMonth == 3 || $todayMonth == 4 || $todayMonth == 5) {
        $season = 'Spring';
    } elseif($todayMonth == 6 || $todayMonth == 7 || $todayMonth == 8) {
        $season = 'Summer';
    } elseif($todayMonth == 9 || $todayMonth == 10 || $todayMonth == 11) {
        $season = 'Automn';
    } else {
        $season = 'Unknown';
    }
    return $season;
}

function checkTodaySeason2()
{
    $todayMonth = date("n");

    if ($todayMonth == 1 || $todayMonth == 2 || $todayMonth == 12) {
        $season = 'Winter';
    } else {
        $monthInterval = floor($todayMonth / 3);

        if($monthInterval == 1) {
            $season = 'Spring';
        } elseif($monthInterval == 2) {
            $season = 'Summer';
        } elseif($monthInterval == 3) {
            $season = 'Automn';
        } else {
            $season = 'Unknown';
        }
    }
    return $season;
}

function checkTodaySeason3()
{
    $todayMonth = date("n");

    $springMonths = array(3, 4, 5);
    $summerMonths = array(6, 7, 8);
    $autumnMonths = array(9, 10, 11);
    $winterMonths = array(1, 2, 12);

    if (in_array($todayMonth, $springMonths)) {
        return "Spring";
    }
    if (in_array($todayMonth, $summerMonths)) {
        return "Summer";
    }
    if (in_array($todayMonth, $autumnMonths)) {
        return "Automn";
    }
    if (in_array($todayMonth, $winterMonths)) {
        return "Winter";
    }
    return "Unknown";
}

function checkTodaySeason4()
{
    $todayMonth = date("n");

    $springMonths = array(
        1 => "Winter",
        2 => "Winter",
        3 => "Spring",
        4 => "Spring",
        5 => "Spring",
        6 => "Summer",
        7 => "Summer",
        8 => "Summer",
        9 => "Automn",
        10 => "Automn",
        11 => "Automn",
        12 => "Winter"
    );

    if (!isset($springMonths[$todayMonth])) {
        return "Unknown";
    }

    return $springMonths[$todayMonth];
}

echo checkTodaySeason4();

?>


