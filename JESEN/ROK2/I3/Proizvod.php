<?php

abstract class Proizvod
{
    protected $naziv;
    protected $cijenabezpdv;
    protected $jedinicamjere;


    function GetNaziv()
    {
        return $this->naziv;
    }

    function SetNaziv($param)
    {
        $this->naziv = $param;
    }

    function GetCijenaBezPdv()
    {
        return $this->cijenabezpdv;
    }

    function SetCijenaBezPdv($param)
    {
        $this->cijenabezpdv = $param;
    }

    function GetJedinica()
    {
        return $this->jedinicamjere;
    }

    function SetJedinica($param)
    {
        $this->jedinicamjere = $param;
    }

    abstract function getCijenaSPdv();
    abstract function setCijenaSPdv($param);

    abstract function getKonverzija();
    abstract function setKonverzija($param);
}


?>