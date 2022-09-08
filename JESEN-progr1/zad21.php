<?php

$brojevi = array();

$broj1 = readline("Unesite broj 1: ") . "\n";
$broj2 = readline("Unesite broj 2: ") . "\n";
$broj3 = readline("Unesite broj 3: ") . "\n";
$broj4 = readline("Unesite broj 4: ") . "\n";
$broj5 = readline("Unesite broj 5: ") . "\n";

$brojevi[] = $broj1;
$brojevi[] = $broj2;
$brojevi[] = $broj3;
$brojevi[] = $broj4;
$brojevi[] = $broj5;

$check = readline("Unesite neki broj: ");

if((in_array($check*$check, $brojevi)))
{
    echo "Kvadrat broja" . " " . $check . " " . "se nalazi u polju.";
}
else
{
    echo "Kvadrat broja" . " " .  $check . " " . "nije u polju.";
}

?>