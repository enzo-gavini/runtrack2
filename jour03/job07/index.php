<?php 
$str="Certaines choses changent, et d'autres ne changeront jamais";
$newStr = "";
$i = 0;
while (isset($str[$i])) {
    if (isset($str[$i + 1])) {
        $newStr .= $str[$i + 1];
    } else {
        $newStr .= $str[0];
    }
    $i++;
}
echo $newStr;
?>