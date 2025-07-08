<?php
  $x = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <?php 
    while($x < 1337) {
        if ($x == 42) {
            echo "<b><u>$x</u></b><br />";
        } else {
            echo "$x<br />";
        }
        $x++;
    }
    ?>
</body>
</html>