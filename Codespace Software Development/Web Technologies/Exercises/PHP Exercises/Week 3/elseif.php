<?php

$a = 4 > 2;
$str_a = "4 > 2";

if ($a == true) {
    echo("$str_a is true <br>");
} else {
    echo("$str_a is not true <br>");
}

$b = 8 > 4;
$str_b = "8 > 4";

if ($a && $b == true) {
    echo("$str_a and $str_b are both true <br>");
} else {
    echo("$str_a and $str_b are not both true <br>");
}

$c = 4 > 8;
$str_c = "4 > 8";

if ($c == true) {
    echo("$str_c is true <br>");
} else {
    echo("$str_c is not true <br>");
}

$c = 4 > 8;
$str_c = "4 > 8";
$d = 8 > 4;
$str_d = "8 > 4";

if ($c == true) {
    echo("$str_c is true <br>");
} else if ($d == true){
    echo("$str_d is true <br>");
}

?>