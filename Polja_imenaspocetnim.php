<?php

$imena = array("Ivan", "Marko", "Ana", "Nemanja", "Anastasija");

foreach($imena as $key=>$val)
{
    if($val[0] == "a" || $val[0] == "A")
    {
        echo $val . "\n";
    }
}




?>