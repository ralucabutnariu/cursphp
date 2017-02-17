<?php
/**
 * Created by PhpStorm.
 * User: raluca.butnariu
 * Date: 2/17/2017
 * Time: 4:47 PM
 */


function printN()
{
    for($i=0;$i<8;$i++){
        for($j=0;$j<6;$j++){
            if($j==0 || $j==5||$i==$j+1){
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

function printE()
{
    for($i=0;$i<7;$i++){
        for($j=0;$j<5;$j++){
            if ($j==0||$i==0||$i==3||$i==6)  {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

function printU()
{
    for($i=0;$i<7;$i++){
        for($j=0;$j<5;$j++){
            if($j==0 || $j==4||$i==6||$i==0&&$j==0){
                if($j==0&&$i==6||$i==6&&$j==4){
                    echo " ";
                } else {
                    echo "*";
                }
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

function printZ (){
    for($i=0;$i<8;$i++){
        for($j=0;$j<6;$j++){
            if($i==0 || $i==7||$i==7-$j-1){
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

function printO() {
    for($i=0; $i<7; $i++){
        for($j=0; $j<5; $j++){
            if($j==0 || $j==4 || $i==0 || $i==6){
                if($i==0 && $j==4 || $j==0 && $i==6 || $i==0 && $j==0 || $i==6 && $j==4){
                    echo " ";
                } else {
                    echo "*";
                }
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
    echo "\n";
}

function printO1($nrLin, $nrCol) {
    for ($i = 1; $i<=$nrLin; $i++) {
        for ($j = 1; $j<=$nrCol; $j++) {
            if (mustDrawAStarInO($i, $j, $nrLin, $nrCol)) {
                echo '*';
            }
            else {
                echo ' ';
            }
        }
        echo "\n";
    }
    echo "\n";
}

//printO1(7, 7);
//printZ();
//printN();
//

function mustDrawAStarInO($i, $j, $nrLin, $nrCol) {
    if ($i == 1 && $j != 1 && $j != $nrCol) {
        return true;
    }

    if ($i == $nrLin  && $j != 1 && $j != $nrCol) {
        return true;
    }

    if ($j == 1 && $i != 1 && $i != $nrLin) {
        return true;
    }

    if ($j == $nrCol && $i != 1 && $i != $nrLin) {
        return true;
    }

    return false;
}

//printO1(5, 25);

//
//printZ();
//printU();
//printZ();
//printO();


/**
 *  Print N E N U
 */
function printNENU(){
    for($i=0;$i<7;$i++){
        for($j=0;$j<5;$j++){
            if($j==0 || $j==4 || $i==$j+1){
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "        ";
        for($j=5;$j<10;$j++){
            if ($j==5||$i==0||$i==3||$i==6)  {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "        ";
        for($j=10;$j<15;$j++){
            if($j==10 || $j==14 || $i==$j+1-10){
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "        ";
        for($j=15;$j<20;$j++){
            if($j==15 || $j==19||$i==6||$i==0&&$j==15){
                if($j==15&&$i==6||$i==6&&$j==19){
                    echo " ";
                } else {
                    echo "*";
                }
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
}

printNENU();

?>