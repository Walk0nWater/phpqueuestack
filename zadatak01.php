<?php

// Zadatak 1

include("Stack.php");

$s = new Stack();

$tekst = readline("Upisite neku rijec: ");

for($i=0; $i<strlen($tekst); $i++)
{
    $c = $tekst[$i];

    $s->Push($c);
}

while($b = $s->Pop())
{
    echo $b;
}

echo "\n";

?>