<?php 
$str="On n'est pas le meilleur quand on le croit mais quand on le sait";

$dico=["consonnes" =>0,"voyelles" =>0];

$i=0;

while (isset($str[$i])) {
    $char = $str[$i];
    if ($char == "a" || $char == "A" || $char == "e" || $char == "E" || $char == "i" || $char == "I" || $char == "o" || $char == "O" || $char == "u" || $char == "U" || $char == "y" || $char == "Y") {
        $dico["voyelles"]++;
    } else if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        $dico["consonnes"]++;
    }
    $i++;
}
?>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $dico["voyelles"] ?></td>
            <td><?= $dico["consonnes"] ?></td>
        </tr>
    </tbody>
</table>