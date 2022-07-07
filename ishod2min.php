<?php

/*Napišite program koji u polje cijelih brojeva učitava 5 brojeva od korisnika. 
Napravite novo polje i u njega prepišite sadržaj prvog polja, ali obrnutim redoslijedom. 
Primjerice, ako je prvo polje 7, 1, 3, 8, 5, onda drugo polje mora biti 5, 8, 3, 1, 7.*/

$polje1 = array(); 

for ($i=0; $i <=4 ; $i++) 
{ 
    $broj = (int)readline("Upisite ".($i+1).". broj: ");
    $polje1[$i] = $broj;
}

foreach ($polje1 as $key => $value) 
{
    echo $value." ";
}
echo " \n";


$polje2 = array();
$counter = 0;

for ($i=4; $i>=0; $i--)
{
    $polje2[$counter] = $polje1[$i];
    $counter++;
}

foreach ($polje2 as $key => $value)
{
    echo $value." ";
}

?>