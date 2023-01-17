<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\ColorController;
$router = new Router();
$router->setBaseURL('/demo');

$router->get('/', [AppController::class,'index']);

$router->get('/colores', [ColorController::class , 'index']);
$router->post('/API/colores/guardar', [ColorController::class, 'guardarAPI'] );
$router->get('/API/colores/buscar', [ColorController::class, 'buscarAPI'] );
$router->post('/API/colores/modificar', [ColorController::class, 'modificarAPI'] );
$router->post('/API/colores/eliminar', [ColorController::class, 'eliminarAPI'] );
$router->get('/API/colores/tipoTopicos', [ColorController::class, 'buscarTopicosAPI'] );
$router->get('/API/colores/topicoSeleccionado', [ColorController::class, 'buscarTopicosAPI1'] );
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
