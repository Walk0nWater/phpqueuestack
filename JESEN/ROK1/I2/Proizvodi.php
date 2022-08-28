<?php
include ("Proizvod.php");

class Proizvodi
{
    protected $proizvodi = array();

    public function Unos()
    {
        while(true)
        {
            $naziv = readline("Unesite naziv: ");
            $cijena = readline("Unesite cijenu: ");
            $jedinica = readline("Unesite jedinicu: ");

            $p = new Proizvod();
            $p->setNaziv($naziv);
            $p->setCijena($cijena);
            $p->setJedinica($jedinica);

            $this->proizvodi[] = $p;

            $check = readline("Zelite li unijeti jos proizvoda? (D/N)");

            if($check == "N" || $check == "n")
            {
                break;
            }
        }
    }

    function Ispis()
    {
        foreach($this->proizvodi as $pr)
        {
            echo $pr->GetNaziv() . " - " . $pr->GetCijena() . " - " . $pr->GetJedinica();
            echo "\n";
        }
    }
    
}



?>