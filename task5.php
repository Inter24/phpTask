<?php

$a = (int)readline();
$b = (int)readline();

if ( $a <= $b) {
    for ( $i = $a; $i <= $b; $i++) {
        if ($i % 2 == 0) {
            echo $i.' ';
        }
    }
}


?>