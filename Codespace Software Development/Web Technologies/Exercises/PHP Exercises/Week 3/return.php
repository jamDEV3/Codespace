<?php

// $jamie = date_default_timezone_set("Europe/London");

// echo date_default_timezone_get();

// echo("<br>");



// $date = date_create();

// echo date_format($date, "Y/m/d H:i:s");

// echo("<br>");

$timezone = date_default_timezone_set("America/New_York");
$time = date("G");


function goodday ($time) {

    $morning = "Good Morning <br>";
    $afternoon = "Good Afternoon <br>";
    $evening = "Good Evening <br>";
    $night = "Good Night <br>";

    if ($time >= 6 && $time < 12) {
        echo($morning);
    }

    elseif ($time >= 12 && $time < 18) {
        echo($afternoon);
    }
    
    elseif ($time >= 18 && $time < 24) {
        echo($evening);
    }

    elseif ($time >= 0 && $time < 6) {
        echo($night);
    }

}

goodday($time);

?>