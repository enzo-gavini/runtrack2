<?php 
$str="I'm sorry Dave I'm afraid I can't do that";

 $i = 0;
while (isset($str[$i])) {
    $vowel = $str[$i];
    if ($vowel == "a" || $vowel == "A" || $vowel == "e" || $vowel == "E" || $vowel == "i" || $vowel == "I" || $vowel == "o" || $vowel == "O" || $vowel == "u" || $vowel == "U" || $vowel == "y" || $vowel == "Y") {
       echo $str[$i] , " est une voyelle <br>";
}
    $i++;
}
?>