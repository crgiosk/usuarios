<?php

include_once ('Conexion.php');

include_once ('../NewCompra/Compra.php');
class APIModel extends Conexion
{

    public function getAllCompras($user)
    {
        $compras = array();
        $compras['compras'] = array();
        $error["error"] = array();
        try {

            $request = $this->connect()->query("SELECT * FROM compra WHERE usuario= '$user' ORDER BY fecha;");

            if ($request->rowCount()) {
                while ($data = $request->fetch()) {

                    $compra = new Compra();

                    $compra->setProducto($data['producto']);
                    $compra->setCantidad($data['cantidad']);
                    $compra->setTotal($data['total']);
                    $compra->setFecha($data['fecha']);
                    $compra->setIcono($data['icono']);

                    array_push($compras['compras'], $compra->toArray());
                }

                $response = array(
                    'status' => true,
                    'data' => $compras,
                    'error' => null
                );

                return strip_tags(json_encode($response));
            } else {
                $response = array(
                    'status' => true,
                    'data' => $compras,
                    'error' => null
                );
                return json_encode($response);
            }
        } catch (Exception $e) {

            $error = array(
                'code' => '1',
                'text' => $e->getMessage()
            );

            $response = array(
                'status' => false,
                'data' => null,
                'error' => $error
            );

            return json_encode($response);
        }
    }

    public function deleteCompras($user){
        try {
            $sql="DELETE FROM compra WHERE usuario ='$user';";
            if ($request = $this->connect()->query($sql) ){
                $response = array(
                    'status' => true,
                    'data' => true,
                    'error' => null
                );
                return json_encode($response);
            }else{
                $error = array(
                    'code' => '2',
                    'text' => 'User not found'
                );
    
                $response = array(
                    'status' => false,
                    'data' => null,
                    'error' => $error
                );

                return json_encode($response);
            }
        } catch (Exception|PDOException $e) {
            $error = array(
                'code' => '2',
                'text' => $e->getMessage()
            );

            $response = array(
                'status' => false,
                'data' => null,
                'error' => $error
            );

            return json_encode($response);
        }

    }

    public function nuevaCompras($compra){
        $sql="INSERT INTO compra VALUES (null,'".$compra->getUsuario()."','".$compra->getProducto()."','".$compra->getCantidad()."','".$compra->getTotal()."','".$compra->getFecha()."','".$compra->getIcono()."');";

        try {
            if ($request = $this->connect()->query($sql)){
                $response = array(
                    'status' => true,
                    'data' => true,
                    'error' => null
                );
                return json_encode($response);
            }else{
                $error = array(
                    'code' => '2',
                    'text' => 'Id duplicated.'
                );
    
                $response = array(
                    'status' => false,
                    'data' => null,
                    'error' => $error
                );

                return json_encode($response);
            }
        } catch (Exception|PDOException $e) {
            $error = array(
                'code' => '2',
                'text' => $e->getMessage()
            );

            $response = array(
                'status' => false,
                'data' => null,
                'error' => $error
            );

            return json_encode($response);
        }

    }

}
