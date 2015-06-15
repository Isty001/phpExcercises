<?php
var_dump(5 + '1.5 String');
var_dump('1.5 String' + 5);
var_dump(5 + '1 String');
var_dump('1 String' + 5);

var_dump((float)'1 String' + 5);
var_dump((int)'1.5 String' + 5);


class obj {
    private $a = 1;
    private $c = 2;
    private $b = 'valami';
}

class obj2 extends obj{
    private $d = '4';
    private $e = '5';
}

var_dump((array) new obj2());

$arr = ['f' => 12, 'g' => 'asd'];
$arr = var_dump((object) $arr);