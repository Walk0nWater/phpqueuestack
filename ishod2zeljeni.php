<?php

/*Napišite program koji od korisnika učitava brojeve sve dok korisnik to želi. 
Kad je unos završen, provjerite je li uneseni niz brojeva padajući. 
Uvjet da bi niz bio padajući je da je svaki element manji ili jednak od elementa 
točno ispred njega. Primjerice, niz 7, 6, 5, 4, 12, 3, 2, 1 nije padajući, 
a niz 96, 15, 15, 15, 6, 3, 1 jest.*/

$upis = array();
$counter = 0;
do 
{
    $broj = (int)readline("Upisite cijeli broj: ");

    $upis[$counter] = $broj;
    $counter++;

    $pitanje = readline("Zelite li upisati jos jedan broj?(yes/no): ");

    
} while ($pitanje == "yes");

//printf(count($upis));

//[0] - 5
//[1] - 4
//[2] - 3
//[3] - 2

for ($i=0; $i < (count($upis) -1) ; $i++) 
{ 
    if ($upis[$i] >= $upis[$i+1]) 
    {
        echo "Broj " . $upis[$i] . " je veći od broja " . $upis[$i+1] . "\n";
    }
    else 
    {
        echo "Broj " . $upis[$i] . " NIJE veći od broja " . $upis[$i+1];
    }
}

?>