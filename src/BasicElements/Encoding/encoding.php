<?php
var_dump(iconv_get_encoding('all'));

$text = 'őéáéűúóüö';

echo iconv("UTF-8", "UTF-7", $text), PHP_EOL;

echo mb_convert_encoding($text, "UTF-7", "UTF-8");

echo mb_detect_encoding($text);