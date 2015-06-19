<?php
$string = 'Abbfghfghfg3';

echo preg_match_all("/A*3/i", $string, $matches) . PHP_EOL;

print_r($matches);


//
$string2 = '4F9nD10L';
echo $string2 . PHP_EOL;

echo preg_replace('[9nd]i', '888', $string2) .PHP_EOL;


//
if(preg_match("/\bw[eai]b\b/i", "PHP is a web scripting language")){
    echo 'match' .PHP_EOL;
} else {
    echo 'No match'. PHP_EOL;
}


//
preg_match_all("|<[^>]+>(.*)</[^>]+>|U", "<b>example: </b><div align=\"left\">this is a test</div>", $out, PREG_SET_ORDER);

print_r($out);