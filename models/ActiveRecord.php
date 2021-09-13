<?php

namespace Model;

class ActiveRecord{
    //base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = "";

    //definir la conexion a la bd
    public static function setDB($dataBase){
        self::$db = $dataBase;
    }

    //lista todas las porpiedades
    public static function getAll(){
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    //lista cierto numero de porpiedades
    public static function get($base, $max){
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $base . " , " . $max . " ;";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function numRows(){
        $query = "SELECT id FROM " . static::$tabla . " ;";
        $resultado = self::$db->query($query);
        $resultado = $resultado->num_rows;
        return $resultado;
    }

    //buscar propiedad por id
    public static function find($id){
        $query = "SELECT * FROM ". static::$tabla . " WHERE id = " . self::$db->escape_string($id) . " ;";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado);
    }

    public static function consultarSQL($query){
        //CONSULTAR
        $resultado = self::$db->query($query);
        //ITERAR RESULTADOS
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObj($registro);
        }
        //LIBERAR MEMORIA
        $resultado->free();
        //RETOMAR LOS RESULTADOS
        return $array;
    }

    protected static function crearObj($registro){
        $objeto = new static;

        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

}