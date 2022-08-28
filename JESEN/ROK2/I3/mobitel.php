<?php

class Mobitel extends Smartphone
{
    protected $punjac;
    protected $vrijeme;

    public function __construct($ma,$mo,$p,$b)
    {
        $this->setMarka($ma);
        $this->setModel($mo);
        $this->setPunjac($p);
        $this->setBaterija($b);
        $this->vrijemePunjenja($p);
    }

    function vrijemePunjenja($punjac)
    {
        
        $this->vrijeme = $this->getBaterija()/$this->getPunjac();
    }
    function setPunjac($p)
    {
        $this->punjac = $p;
    }
    function getPunjac()
    {
        return $this->punjac;
    }
    function getVrijeme()
    {
        return $this->vrijeme;
    }
    
    public function Ispis()
    {
        return "Marka: " .  $this->getMarka() . "\nModel: " . $this->getModel() . "\nVrijeme punjenja: " . $this->getVrijeme();
    }
    function echo()
    {
        return $this->vrijeme;
    }
}



?>