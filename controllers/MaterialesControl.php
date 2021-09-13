<?php

namespace Control;

use MVC\Router;
use Model\Materiales;

class MaterialesControl{
    
    public static function index(Router $router){
        $numPagina = $_SESSION["numPagina"] = 1;
        $totalPaginas = ceil(Materiales::numRows() / 10);
        $materiales = Materiales::get(($numPagina - 1) * 10, 10);
        
        $router->render("paginas/materiales", [
            "materiales" => $materiales,
            "totalPaginas" => $totalPaginas,
            "numPagina" => $numPagina
        ]);
    }

    public static function paginador(Router $router){
        $numPagina = $_SESSION["numPagina"];
        $totalPaginas = ceil(Materiales::numRows() / 10);
        
        
        if(isset($_POST["atras"]) && $numPagina > 1){
            $_SESSION["numPagina"] --;
        } elseif (isset($_POST["siguiente"]) && $numPagina < $totalPaginas){
            $_SESSION["numPagina"] ++;
            
        }
        $numPagina = $_SESSION["numPagina"];
        $materiales = Materiales::get(($numPagina - 1) * 10, 10);
        $router->render("paginas/materiales", [
            "materiales" => $materiales,
            "totalPaginas" => $totalPaginas,
            "numPagina" => $numPagina
        ]);
    }
}