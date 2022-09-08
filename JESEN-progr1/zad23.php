<?php

$polje1 = array(1,2,3,4,5);
$polje2 = array(3,4,5,6,7);

$novo = array_unique(array_merge($polje1, $polje2));

print_r($novo);

?>