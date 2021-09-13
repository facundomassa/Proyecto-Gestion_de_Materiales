<?php

namespace Model;

class Ingresar extends ActiveRecord{
    protected static $tabla = "ingresos";
    protected static $columnasDB = ["id", "remitosID", "materialID", "cantidad", "fecha", "ingresadoPor", "desde"];

    public $id;
    public $remitosID;
    public $materialID;
    public $cantidad;
    public $fecha;
    public $ingresadoPor;
    public $desde;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->remitosID = $args["remitosID"] ?? "";
        $this->materialID = $args["materialID"] ?? "";
        $this->cantidad = $args["cantidad"] ?? "";
        $this->fecha = date("Y/m/d");
        $this->ingresadoPor = $args["ingresadoPor"] ?? "";
        $this->desde = $args["desde"] ?? "";
    }
}