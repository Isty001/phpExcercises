<?php

function generate(){
    for($i=1; $i<3; $i++){
        yield $i;
    }
}

$gen = generate();
    foreach($gen as $g){
        echo $g;
}