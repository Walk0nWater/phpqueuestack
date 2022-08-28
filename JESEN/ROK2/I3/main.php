<?php
include "Smartphone.php";
include "Mobitel.php";

$ma = readline("Upisite Marku mobitela: ");
$mo = readline("Upisite Model mobitela: ");
$p = readline("Upisite jacinu punjaca u amperima: ");
$b = readline("Upisite kapacitet baterije u amper-satima: ");


$nMob = new Mobitel($ma,$mo,$p,$b);

echo $nMob->Ispis();



?>