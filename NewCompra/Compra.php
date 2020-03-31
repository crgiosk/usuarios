<?php
class Compra
{
    private $usuario;
    private $producto;
    private $cantidad;
    private $total;
    private $fecha;
    private $icono;
    private $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->icono;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function getProducto()
    {
        return $this->producto;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function setIcono($icono)
    {
        $this->icono = $icono;
    }

    public function getIcono()
    {
        return $this->icono;
    }

    public function toArray()
    {
        return array(
            "producto" => $this->producto,
            "cantidad" => $this->cantidad,
            "total" => $this->total,
            "fecha" => $this->fecha,
            "icono" => $this->icono,
        );
    }
}
