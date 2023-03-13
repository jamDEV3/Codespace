<?php

$num = 7;

function modulus($num) {

    if ($num%2 == 0) {
        echo("$num does divide exactly into two <br>");
    }

    else {
        echo("$num does not divide exactly into two <br>");
    }

}

modulus($num);

$num = 6;

modulus($num);
?>