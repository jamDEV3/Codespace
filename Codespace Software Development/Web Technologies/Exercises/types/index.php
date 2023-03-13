<?php

$a = 10;
$b = 20;
$c = 41.71;
$d = 21.21;

$e = $a + $b;
$f = $d - $c;
$g = $c * $a;
$h = ++$a;
$i = --$b;



echo "Addition: $e <br>";
echo "Subtraction: $f <br>";
echo "Multiplication: $g <br>";
echo "Increment: $h <br>";
echo "Decrement: $i <br>";

echo "<br>";

$a = true;
$b = false;

$test1 = ($a && $a)? "true": "false";
$test2 = ($a && $b)? "true": "false";
$test3 = ($b && $b)? "true": "false";

echo "Test 1 is: $test1 <br>";
echo "Test 2 is: $test2 <br>";
echo "Test 3 is: $test3 <br>";

echo "<br>";

$test4 = ($a || $a)? "true": "false";
$test5 = ($a || $b)? "true": "false";
$test6 = ($b || $b)? "true": "false";

echo "Test 4 is: $test4 <br>";
echo "Test 5 is: $test5 <br>";
echo "Test 6 is: $test6 <br>";

echo "<br>";

$test7 = (!$a)? "true": "false";
$test8 = (!$b)? "true": "false";

echo "Test 7 is: $test7 <br>";
echo "Test 8 is: $test8 <br>";

echo "<br>";

$test9 = ($a xor $a)? "true": "false";
$test10 = ($a xor $b)? "true": "false";
$test11 = ($b xor $b)? "true": "false";

echo "Test 9 is: $test9 <br>";
echo "Test 10 is: $test10 <br>";
echo "Test 11 is: $test11 <br>";

echo "<br>";

$a = "Jamie";
$aa = " Tyler";

$a .= $aa;

echo "\$a and \$aa are strings with the value: $a <br>";

echo "<br>";

$b = 4;
$bb = 6;

$b +=$bb;

echo "\$b and \$bb are integers with the added value of: $b <br>";

echo "<br>";

$c = 7.5;
$cc = 2.25;

$c -=$cc;

echo "\$c and \$cc are integers with the deducted value of: $c <br>";

echo "<br>";

$d = 9;
$dd = 5;

$d *=$dd;

echo "\$d and \$dd are integers with the multiplied value of: $d <br>";

echo "<br>";

$e = 12;
$ee = 4;

$e /=$ee;

echo "\$e and \$ee are integers with the multiplied value of: $e <br>";

$a = 10;
$b = 10;

echo "<br>";

$test12 = ($a != $b)? "true": "false";
$test13 = ($a == $b)? "true": "false";
$test14 = ($a < $b)? "true": "false";
$test15 = ($a > $b)? "true": "false";

echo "Test 12 is: $test12 <br>";
echo "Test 13 is: $test13 <br>";
echo "Test 14 is: $test14 <br>";
echo "Test 15 is: $test15 <br>";

?>


