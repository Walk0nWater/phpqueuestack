<?php

include("Datum.php");

class DatumEN extends Datum
{
    function Trenutni()
    {
        parent::Trenutni();
        $date = date("Y-m-d");
        return $date;
    }
}


?>