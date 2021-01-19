<?php

function power($a, $n) {

            if ($n == 0 ) {  
                return 1;
            } else {
                return $a * power($a, $n-1);
            }     
}


$a = (float)readline();
$n = (int)readline();

echo(power($a, $n));

?>