<?php

$x=9;
$y=10;

echo decbin($x) .PHP_EOL. decbin($y) .PHP_EOL; //1001 , 1010

echo $x & $y; //8
echo PHP_EOL;
echo $x | $y; //11
echo PHP_EOL;


echo decbin($x << 1); //Move bits by 1 -> 10010
echo PHP_EOL;
echo $x << 1; //18