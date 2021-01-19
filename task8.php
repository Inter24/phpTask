<?php

function checkType($number) {
        $check = true;

        for ($i = 2; $i * $i <= $number; $i++ ) {
            if ($number % $i == 0) {
                $check = false;                
                break; 
            }
        }    

        if ($check == true) {
            echo 'prime';  
        } else {
            echo 'composite';
        }         

}

$n = (int)readline();
checkType($n);

?>