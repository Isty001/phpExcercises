<?php
//
echo (10 % 4) ** 3 . PHP_EOL;

//
$text = 'Hello ';
echo $text .= ' there!' .PHP_EOL;

//
$a = 2;
var_dump($a += '5');
//
var_dump('a' == 0);

//
$my_file = @file('file');

//
$d = 'A4';
for ($n=0; $n<6; $n++) {
    echo ++$d . PHP_EOL;
}

//
$output = `pwd`;
echo $output;

//
var_dump(FALSE && TRUE XOR TRUE);

//
var_dump([1, 2, 3] + ['a', 'b', 'c', 'd', 'e']);

//
class ParentClass{
}

class ChildClass extends ParentClass{
}

$class = new ChildClass();
var_dump($class instanceof ChildClass);
var_dump($class instanceof ParentClass);

//
