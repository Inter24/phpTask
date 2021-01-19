<?php

$y = (int)readline();

echo ($y % 4 == 0 && $y % 100 != 0 || $y % 400 == 0) ? 'YES' : 'NO';

?>