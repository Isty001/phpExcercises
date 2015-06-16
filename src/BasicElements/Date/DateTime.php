<?php
$date = new DateTime();
echo $date->format('Y-M-d H:i:s') .PHP_EOL;

$date->add(new DateInterval('P10D'));
echo $date->format('Y-M-d H:i:s').PHP_EOL;


$date->setTime(14, 55);
echo $date->format('Y-m-d H:i:s') .PHP_EOL;

$date->sub(new DateInterval('P10YT7H'));
echo $date->format('Y-m-d H:i:s') .PHP_EOL;