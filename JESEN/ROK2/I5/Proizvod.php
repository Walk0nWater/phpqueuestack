<?php

class Proizvod
{
    public $id;
    protected $naziv;
    protected $cijena;
    

    public function getNaziv()
    {
        return $this->naziv;
    }

    protected function setNaziv($param)
    {
        $this->naziv = $param;
    }

    public function getCijena()
    {
        return $this->cijena;
    }

    protected function setCijena($param)
    {
        $this->cijena = $param;
    }
}


?>