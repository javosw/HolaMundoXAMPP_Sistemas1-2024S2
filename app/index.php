<?php
/*
echo '<pre>';
echo 'REQUEST_URI: '.$_SERVER["REQUEST_URI"].'<br/>';
echo 'QUERY_STRING: '.$_SERVER["QUERY_STRING"].'<br/>';
echo 'REQUEST_METHOD: '.$_SERVER["REQUEST_METHOD"].'<br/>';
echo 'SCRIPT_NAME: '.$_SERVER["SCRIPT_NAME"].'<br/>';
echo '</pre>';

["REQUEST_METHOD"]=>
string(3) "GET"
["QUERY_STRING"]=>
string(0) ""
["REQUEST_URI"]=>
string(24) "/holaMundo/sdfsdfsd/fsdf"
["SCRIPT_NAME"]=>
string(20) "/holaMundo/index.php"
*/

$uri = $_SERVER['REQUEST_URI'];

// if (preg_match('//', $uri)) {}
if(preg_match('/^\/holaMundo\/hola/', $uri)) {
    require './view/hola.php';
}
else if(preg_match('/^\/holaMundo\/jugadores/', $uri)) {
    require_once __DIR__ . '/controller/JugadoresController.php';
    JugadoresController::listarTodos();
}
else if(preg_match('/^\/holaMundo\/partidos/', $uri)) {
    require_once __DIR__ . '/controller/PartidosController.php';
    PartidosController::selectCompeticion();
}
else {
    http_response_code(404);
    require '/view/errores.php';
}
