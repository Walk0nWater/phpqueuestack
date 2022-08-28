<?php

include("Proizvod.php");

class Kutija extends Proizvod
{
    private $duzina;
    private $sirina;
    private $visina;

    public function __construct()
    {
        parent::__construct();
        $this->setDuzina();
        $this->setSirina();
        $this->setVisina();
    }

    public function getDuzina()
    {
        return $this->duzina;
    }

    protected function setDuzina($param)
    {
        $this->duzina = $param;
    }

    public function getSirina()
    {
        return $this->sirina;
    }

    protected function setSirina($param)
    {
        $this->sirina = $param;
    }

    public function getVisina()
    {
        return $this->visina;
    }

    protected function setVisina($param)
    {
        $this->visina = $param;
    }

}


?>