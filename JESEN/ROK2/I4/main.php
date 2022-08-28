<?php
include("HrTime.php");

$a = new Time();
echo $a->show();
echo "\n";


$b = new HrTime();
echo $b->show();
echo "\n";
echo $b->Split();

?>