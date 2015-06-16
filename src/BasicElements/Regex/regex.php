<?php
$string = 'Abbfghfghfg3';

echo preg_match_all("/A*3/i", $string, $matches) . PHP_EOL;

print_r($matches);


//
$string2 = '4F9nd10L';
echo $string2 . PHP_EOL;

echo preg_replace('[9nd]', '888', $string2);