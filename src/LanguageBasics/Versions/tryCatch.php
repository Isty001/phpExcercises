<?php

function check($num){
    if( $num <= 0){
        throw new Exception('Can\'t be 0 or less!');
    } else {
        return TRUE;
    }
}

try {
    check(2);
    echo 'OK';
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Finally';
}