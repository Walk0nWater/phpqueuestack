<?php
include ("Proizvod.php");

class Automobil extends Proizvod
{
    private $marka;
    private $model;
    private $motor_vrsta;
    private $motor_snaga;
    

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

    public function getMotorVrsta()
    {
        return $this->motor_vrsta;
    }

    protected function setMotorVrsta($param)
    {
        $this->motor_vrsta = $param;
    }

    public function getMotorSnaga()
    {
        return $this->motor_snaga;
    }

    protected function setMotorSnaga($param)
    {
        $this->motor_snaga = $param;
    }

    function Unos()
    {

        $naziv = readline("Unesite naziv: ") . "\n";
        $cijena = readline("Unesite cijenu: ") . "\n";
        $marka = readline("Unesite marku: ") . "\n";
        $model = readline("Unesite model: ") . "\n";
        $vrsta = readline("Unesite vrstu: ") . "\n";
        $snaga = readline("Unesite snagu: ") . "\n";
        
        $this->setNaziv($naziv);
        $this->setCijena($cijena);
        $this->setMarka($marka);
        $this->setModel($model);
        $this->setMotorVrsta($vrsta);
        $this->setMotorSnaga($snaga);

    }

    function Ispis()
    {
        echo $this->getNaziv() . "\n";
        echo $this->getCijena() . "\n";
        echo $this->getMarka() . "\n";
        echo $this->getModel() . "\n";
        echo $this->getMotorVrsta() . "\n";
        echo $this->getMotorSnaga() . "\n";
    }

}





?>