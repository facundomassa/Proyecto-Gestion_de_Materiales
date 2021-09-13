<?php

namespace Control;

use MVC\Router;
use Model\Ingresar;
use Model\Materiales;

class IngresosControl{
    
    public static function index(Router $router){
        $numPagina = $_SESSION["numPagina"] = 1;
        $totalPaginas = ceil(Ingresar::numRows() / 10);
        
        $ingresos = Ingresar::get(($numPagina - 1) * 10, 10);
        $ingresoMaterial = Materiales::getAll();
        
        $router->render("ingresos/total", [
            "ingresos" => $ingresos,
            "materiales" => $ingresoMaterial,
            "totalPaginas" => $totalPaginas,
            "numPagina" => $numPagina
        ]);
    }

    public static function paginador(Router $router){
        $numPagina = $_SESSION["numPagina"];
        $totalPaginas = ceil(Ingresar::numRows() / 10);
        $ingresoMaterial = Materiales::getAll();
        
        if(isset($_POST["atras"]) && $numPagina > 1){
            $_SESSION["numPagina"] --;
        } elseif (isset($_POST["siguiente"]) && $numPagina < $totalPaginas){
            $_SESSION["numPagina"] ++;
        }

        $numPagina = $_SESSION["numPagina"];
        $ingresos = Ingresar::get(($numPagina - 1) * 10, 10);
        $router->render("ingresos/total", [
            "ingresos" => $ingresos,
            "materiales" => $ingresoMaterial,
            "totalPaginas" => $totalPaginas,
            "numPagina" => $numPagina
        ]);
    }

    public static function ingresar(Router $router){
        

        $router->render("ingresos/ingresar");
    }
}