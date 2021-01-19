<?php
$a = readline();
do {
 if($a == 2 || $a == 1) {
     echo "YES";
     break;
 }
 if($a % 2 == 0) {
  $a=$a/2;
 } else {
  echo "NO";
  break;
 } 
} while($a >= 2);

?>