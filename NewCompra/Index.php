<?php
include_once '../API/API.php';
include_once 'Compra.php';
$API = new API();

if (isset($_POST['usuario']) &&
    isset($_POST['producto']) &&
    isset($_POST['cantidad']) &&
    isset($_POST['total']) &&
    isset($_POST['fecha']) &&
    isset($_POST['icono']))
    {
        
    $compra->setUsuario($_POST['usuario']);
    $compra->setProducto($_POST['producto']);
    $compra->setCantidad($_POST['cantidad']);
    $compra->setTotal($_POST['total']);
    $compra->setFecha($_POST['fecha']);
    $compra->setIcono($_POST['icono']);
    
    echo $API->nuevaCompra($compra);
}else{
    echo json_encode(array("error" => "Error al infresar la compra."));
}
?>
