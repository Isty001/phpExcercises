<?php
$add = 1;

function counter(){
    static $number = 1;

    if( $number <= 10 ){
        $number += $GLOBALS['add'];
        counter();
    } else {
        echo $number . PHP_EOL;
    }
}

counter();


//
$a = 1;

function add(&$num){
    $num++;
}

add($a);
echo $a . PHP_EOL; //2


//
$c = & $d;

$d = 76;
echo $c . PHP_EOL;
