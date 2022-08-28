<?php

class Grad
{
    protected $naziv;
    protected $pbr;

    function GetNaziv()
    {
        return $this->naziv;
    }

    function SetNaziv($p)
    {
        $this->naziv = $p;
    }

    function GetPbr()
    {
        return $this->pbr;
    }

    function SetPbr($p)
    {
        $this->pbr = $p;
    }
}



?>