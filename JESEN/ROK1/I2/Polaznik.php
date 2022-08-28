<?php

class Polaznik
{
   protected $prezime;
   protected $ime;
   protected $prolaz;
   
   function getPrezime()
   {
        return $this->prezime;
   }

   function setPrezime($param)
   {
        $this->prezime = $param;
   }

   function getIme()
   {
        return $this->ime;
   }

   function setIme($param)
   {
        $this->ime = $param;
   }

   function getProlaz()
   {
        return $this->prolaz;
   }

   function setProlaz($param)
   {
        $this->prolaz = $param;
   }

   
}


?>