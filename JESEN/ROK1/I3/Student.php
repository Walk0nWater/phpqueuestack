<?php

abstract class Student
{
    protected $ime;
    protected $prezime;
    protected $datum;


    function getIme()
    {
        return $this->ime;
    }

    function setIme($param)
    {
        $this->ime = $param;
    }

    function getPrezime()
    {
        return $this->prezime;
    }

    function setPrezime($param)
    {
        $this->prezime = $param;
    }

    function getDatum()
    {
        return $this->datum;
    }

    function setDatum($param)
    {
        $this->datum = $param;
    }

    abstract function GetGodine();
    abstract function SetGodine();

    
}


?>