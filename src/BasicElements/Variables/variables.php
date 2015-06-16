<?php
$add = 1;

function counter(){
    static $number = 1;

    if( $number <= 10 ){
        $number += $GLOBALS['add'];
        counter();
    } else {
        echo $number;
    }
}

counter();