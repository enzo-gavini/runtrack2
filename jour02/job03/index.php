<?php
for ($x = 0; $x < 100 ; $x++) {
    if ($x >= 0 && $x <= 20 ) {
        echo "<i>$x<br />";
    }  elseif ($x >= 25 && $x <= 50) {
        if($x == 42) {
        echo"La Plaforme_ <br />";
        } else echo"<u>$x<br />";
    } 
}
?>
