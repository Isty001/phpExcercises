<?php
const PATH = 'File path: ';

echo PATH . __DIR__ . PHP_EOL;
echo PATH . __FILE__ .PHP_EOL;

define('VALAMI', 'valami');

echo VALAMI;

class myClass{
    const KONSTANS = 1;
    //define('KONS', 2); not working in class
}