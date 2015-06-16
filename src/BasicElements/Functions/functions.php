<?php
$hello = function($name) {
    echo 'Hello ' . $name;
};
$hello('Valaki');

//
$create = TRUE;

if( $create ){
    function say(){
        echo 'Hello!!';
    }
}
say();

//
function callback($num){
    return $num ** 2;
}
$array = [1, 2, 3, 4];

$newArray = array_map('callback', $array);
print_r($newArray);