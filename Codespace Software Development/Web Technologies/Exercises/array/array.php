<?php

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

foreach($days as $value)
{
    echo "Day is $value<br>";
}

$avg_low = array("winter" => 1, "summer" => 11);
$avg_high = array("winter" => 7, "summer" => 19);

echo "Winter months average a low of $avg_low[winter]C and highs of $avg_high[winter]C.<br/>";
echo "Summer months average a low of $avg_low[summer]C and highs of $avg_high[summer]C.<br/>";

$test_scores = array(

    "aarron" => array (
        "Physics" => '74%',
        "English" => '69%',
        "Maths" => '70%'
    ),

    "jamie" => array (
        "Physics" => '64%',
        "English" => '79%',
        "Maths" => '69%'
    ),

    "harry" => array (
        "Physics" => '55%',
        "English" => '62%',
        "Maths" => '70%'
    )
);
echo "<br>";

echo "Aarron test scores:<br>";
echo "Physics:";
echo $test_scores["aarron"]["Physics"]."<br>";
echo "English:";
echo $test_scores["aarron"]["English"]."<br>";
echo "Maths:";
echo $test_scores["aarron"]["Maths"]."<br>";

echo "<br>";

echo "Jamie test scores:<br>";
echo "Physics:";
echo $test_scores["jamie"]["Physics"]."<br>";
echo "English:";
echo $test_scores["jamie"]["English"]."<br>";
echo "Maths:";
echo $test_scores["jamie"]["Maths"]."<br>";

echo "<br>";

echo "Harry test scores:<br>";
echo "Physics:";
echo $test_scores["harry"]["Physics"]."<br>";
echo "English:";
echo $test_scores["harry"]["English"]."<br>";
echo "Maths:";
echo $test_scores["harry"]["Maths"]."<br>";

?>