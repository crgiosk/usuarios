<?php

if (isset($_POST['usuario'])) {
    include_once '../API/API.php';
    $API = new API();
    echo $API->getCompras($_POST['usuario']);
}else{
    $error = array(
        'code' => '1',
        'text' => $e->getMessage()
    );

    $response = array(
        'status' => false,
        'data' => null,
        'error' => $error
    );
    echo json_encode($response);

}
?>