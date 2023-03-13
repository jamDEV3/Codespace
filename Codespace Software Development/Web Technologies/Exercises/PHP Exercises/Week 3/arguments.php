<?php

$number = 5;

function square($number) {

    echo("Square root of $number = ". sqrt($number));
    echo("<br>");
    
}


function cube($number) {

    echo("Cube of $number = ".($number*$number*$number));
    echo("<br>");
}

square($number);
cube($number);


square(6);
cube(4);


?>