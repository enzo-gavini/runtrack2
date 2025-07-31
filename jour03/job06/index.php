<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

$i = 0;
while (isset($str[$i])) {
    $i++;
}

$index = $i - 1;
while ($index >= 0) {
    echo $str[$index];
    $index--;
}
?>