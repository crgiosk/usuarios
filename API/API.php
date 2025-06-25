<?php
include_once 'APIModel.php';
class API extends APIModel{

    function nuevaCompra($new_compra){return $this->nuevaCompras($new_compra);}

    function getCompras($user){ return $this->getAllCompras($user);}
    
    function deleteCompras($user){ return $this->deleteCompras($user);}
    
}
?>