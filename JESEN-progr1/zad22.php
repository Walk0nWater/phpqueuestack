<?php

$svaimena = array();
$imena = array();

for($i=1; $i<=5;$i++)
{
    $ime = readline("Unesite ime" . $i . " :");
    $svaimena[] = $ime;
}

$slovo = "a";


foreach($svaimena as $k => $v)
{   
    $pos = strpos($v, $slovo);

    if($pos !== false)
    {
        $imena[] = $v;
    }
}

print_r($imena);




?>