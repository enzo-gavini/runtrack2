<?php
$entier = [200, 204, 173, 98, 171, 404, 459];

foreach ($entier as $number) {
    if ($number % 2 == 0) {
        echo $number , "Nombre pair<br>";
    } else {
        echo $number , "Nombre impair<br>";
    }
}

?>