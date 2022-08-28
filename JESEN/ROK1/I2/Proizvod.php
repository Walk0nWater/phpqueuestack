<?php

class Proizvod
{
    protected $naziv;
    protected $cijena;
    protected $jedinica;

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($param)
    {
        $this->naziv = $param;
    }

    public function getCijena()
    {
        return $this->cijena;
    }

    public function setCijena($param)
    {
        $this->cijena = $param;
    }

    public function getJedinica()
    {
        return $this->jedinica;
    }

    public function setJedinica($param)
    {
        $this->jedinica = $param;
    }

}



?>