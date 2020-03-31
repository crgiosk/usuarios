<?php
include_once 'APIModel.php';
class API extends APIModel{

    function nuevaCompra($compra){return $this->nuevaCompras($compra);}

    function getCompras($user){ return $this->getAllCompras($user);}
    
    function deleteCompras($user){ return $this->deleteCompras($user);}
    
}
?>