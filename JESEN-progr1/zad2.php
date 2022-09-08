<?php

$uneseni = array();

while(true)
{
    $unos = readline("Unesite broj: ");
    
    $check = readline("Zelite li jos jedan broj unijeti? (D/N) ");

    if($check == "N" || $check == "n")
    {
        break;
    }

    $uneseni[] = $unos;
}

for($i=0;$i<count($uneseni)-1;$i++)
{
    if($uneseni[$i]<=$uneseni[$i+1])
    {
        echo "Niz je rastuci.";
    }
    else
    {
        echo "Niz je padajuci.";
    }
}


?>