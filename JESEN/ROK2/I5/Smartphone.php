<?php
include("Proizvod.php");

class Smartphone extends Proizvod
{
    protected $marka;
    protected $model;
    protected $memorija;
    protected $mreza;

    public function getMarka()
    {
       return $this->marka; 
    }

    protected function setMarka($param)
    {
        $this->marka = $param;
    }

    public function getModel()
    {
       return $this->model; 
    }

    protected function setModel($param)
    {
        $this->model = $param;
    }

    public function getMemorija()
    {
       return $this->memorija; 
    }

    protected function setMemorija($param)
    {
        $this->memorija = $param;
    }

    public function getMreza()
    {
       return $this->mreza; 
    }

    protected function setMreza($param)
    {
        $this->mreza = $param;
    }

    function Unos()
    {

        $naziv = readline("Unesite naziv: ") . "\n";
        $cijena = readline("Unesite cijenu: ") . "\n";
        $marka = readline("Unesite marku: ") . "\n";
        $model = readline("Unesite model: ") . "\n";
        $memorija = readline("Unesite memoriju: ") . "\n";
        $mreza = readline("Unesite mrezu (4G/5G): ") . "\n";
        
        $this->setNaziv($naziv);
        $this->setCijena($cijena);
        $this->setMarka($marka);
        $this->setModel($model);
        $this->setMemorija($memorija);
        $this->setMreza($mreza);
    }

    
    function Ispis()
    {
        
        echo $this->getNaziv() . "\n";
        echo $this->getCijena() . "\n";
        echo $this->getMarka() . "\n";
        echo $this->getModel() . "\n";
        echo $this->getMemorija() . "\n";
        echo $this->getMreza() . "\n";
        
    }
}


?>