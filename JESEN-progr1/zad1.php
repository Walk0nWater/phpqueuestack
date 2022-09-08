<?php

$uneseni = array();
$obrnuti = array();

for($i=1;$i<=5;$i++)
{
    $broj = readline("Unesite broj" . " $i:");
    $uneseni[] = $broj;
}

for($i=4;$i>=0;$i--)
{
    $obrnuti[] = $uneseni[$i];
}

print_r($obrnuti);



?>