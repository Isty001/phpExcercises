<?php
function add(...$numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

echo add(1, 20, 30, 11, 8, 9);