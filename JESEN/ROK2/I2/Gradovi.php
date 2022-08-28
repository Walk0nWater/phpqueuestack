<?php

include ("Grad.php");

class Gradovi
{
    protected $gradovi = array();

    function __construct()
    {
        $file = file(__DIR__ . "//gradovi.txt");

        foreach ($file as $key => $line)
        {
            if($key>0)
            {
                $line = trim($line, "\n");
                $line = trim($line, "\r");

                $line_array = explode(";", $line);

                $naziv = $line_array[0];
                $pbr = $line_array[1];

                $g = new Grad();
                $g->SetNaziv($naziv);
                $g->SetPbr($pbr);

                $this->gradovi[] = $g;

            }  
        }  
    }

    function Ispis()
    {

        foreach ($this->gradovi as $a)
        {
            echo $a->GetNaziv() . " - " . $a->GetPbr();
            echo "\n";
        }
    }
}



?>