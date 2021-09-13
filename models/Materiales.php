<?php

namespace Model;

class Materiales extends ActiveRecord{
    protected static $tabla = "materiales";
    protected static $columnasDB = ["id", "codigo", "descripcion", "unidad", "cantidad", "categoria"];

    public $id;
    public $codigo;
    public $descripcion;
    public $unidad;
    public $cantidad;
    public $categoria;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->codigo = $args["codigo"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->unidad = $args["unidad"] ?? "";
        $this->cantidad = $args["cantidad"] ?? "";
        $this->categoria = $args["categoria"] ?? "";
    }
}