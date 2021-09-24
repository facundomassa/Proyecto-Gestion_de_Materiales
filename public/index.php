<?php

require_once __DIR__ . "/../includes/app.php";

use MVC\Router;
use Control\MaterialesControl;
use Control\IngresosControl;

$router = new Router();

//public
$router->get("/", [MaterialesControl::class, "index"]);
$router->post("/", [MaterialesControl::class, "paginador"]);
$router->get("/ingresos/total", [IngresosControl::class, "index"]);
$router->post("/ingresos/total", [IngresosControl::class, "paginador"]);
$router->get("/ingresos/ingresar", [IngresosControl::class, "ingresar"]);
$router->get("/materiales/lista-materiales", [MaterialesControl::class, "materialesSueltos"]);

$router->comprobarRutas();