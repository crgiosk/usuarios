<?php

include_once ("db.php");

 class Celular extends DB{
    private $id=0;
    private $name="";

    function getCelulares(){
        $query = $this->connect()->query("SELECT * FROM celular");
        return $query;
    }
}
?>