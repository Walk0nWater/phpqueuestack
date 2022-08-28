<?php

include("Automobil.php");

$automobili = array();

while(true)
{
    $a = new Automobil();

    $a->Unos();

    $automobili[] = $a;

    $check = readline("Zelite li jos automobila dodati? (D/N) ");

    if($check == "N" || $check == "n")
    {
        break;
    }
}



foreach($automobili as $key => $a)
{
    $a->Ispis();
}


?>