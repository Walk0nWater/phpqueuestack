<?php

// zadatak02-2.php
// upisuje obrnutim redoslijedom brojeve u fajl koje je korisnik unio

$fp = fopen("/Applications/XAMPP/xamppfiles/htdocs/I6/zadatak02-2.txt", "w+");

$unos_array = array();

for($i=1; $i<=5; $i++)
{
    $b = readline("Upisite broj " . $i . ".: ");

    $unos_array[$i] = $b;
}

for($i=5; $i>=1; $i--)
{
    $b = $unos_array[$i];

    fwrite($fp, $unos_array[$i]);

    if($i > 1)
    {
        fwrite($fp, ",");
    }
}

?>