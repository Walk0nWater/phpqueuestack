<?php

include("Polaznik.php");

class Polaznici
{
    protected $polaznici = array();

    public function __construct()
    {
        $file = file(__DIR__ . "//polaznici.txt");

        foreach($file as $key => $line)
        {
            if($key>0)
            {
                $line = trim($line, "\n");
                $line = trim($line, "\r");

                $line_array = explode(";", $line);

                $prezime = $line_array[0];
                $ime = $line_array[1];
                $prolaz = $line_array[2];

                $p = new Polaznik();
                $p->setPrezime($prezime);
                $p->setIme($ime);
                $p->setProlaz($prolaz);

                $this->polaznici[] = $p;
            }
        }

    }

    function Ispis()
    {
        foreach($this->polaznici as $a)
        {
            if($a->getProlaz() == "DA")
            {
                echo $a->getIme() . " " . $a->getPrezime() . "\n";
            }
        }
    }

}


?>