<?php 

$str="Dans l'espace,personne ne vous entend crier";

$count = 0 ;

$i = 0;

while (isset($str[$i])) {
    $count++;
    $i++;
}

echo "La chaine contient $count caratères.";

?>