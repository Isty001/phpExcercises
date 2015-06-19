<?php
//
$i = 0;
while ($i < 10){
    echo $i++ . PHP_EOL;
}

//
$i = 0;
do {
    echo $i++ . PHP_EOL;
} while ( $i<5 );


for($i=1; $i<=10; $i++){
    if($i==5){
        continue;
    } elseif( $i==8) {
        break;
    } else {
        echo $i .' ';
    }
}
