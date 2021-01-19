<?php

$n1 = readline();
$n2 = readline();
$n3 = readline();

if ($n1 >= $n2 && $n1 >= $n3) {
    echo $n1;
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo $n2;
} else {
    echo $n3;
}

?>