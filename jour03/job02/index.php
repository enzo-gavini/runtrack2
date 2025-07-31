<?php 
$str="Tous ces intants seront perdus dans le temps comme les larmes sous la pluie.";
// for ($i = 0; $i < strlen($str); $i++) {
//      if ($i % 2 == 0){
//         echo $str[$i];
//      }
//  }
 $i = 0;
 while (isset($str[$i])) {
     echo $str[$i];
     $i += 2;
 }
?>