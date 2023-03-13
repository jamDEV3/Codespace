<?php

$result = 5+5;

function square() {

    $result = 9;

    echo("Square root of $result = ". sqrt($result));
    echo("<br>");
    
}

function cube() {

    $result = 2;

    echo("Cube of $result = ".($result*$result*$result));
    echo("<br>");
}

square();
cube();

?>