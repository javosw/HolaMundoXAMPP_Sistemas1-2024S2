<?php
/*
echo '<pre>';
echo 'REQUEST_URI: '.$_SERVER["REQUEST_URI"].'<br/>';
echo 'QUERY_STRING: '.$_SERVER["QUERY_STRING"].'<br/>';
echo 'REQUEST_METHOD: '.$_SERVER["REQUEST_METHOD"].'<br/>';
echo 'SCRIPT_NAME: '.$_SERVER["SCRIPT_NAME"].'<br/>';
echo '</pre>';
*/


/*
["REQUEST_METHOD"]=>
string(3) "GET"
["QUERY_STRING"]=>
string(0) ""
["REQUEST_URI"]=>
string(24) "/holaMundo/sdfsdfsd/fsdf"
["SCRIPT_NAME"]=>
string(20) "/holaMundo/index.php"
*/


switch ($_SERVER['REQUEST_URI']) {
    case '':
        require 'view/bien.php';
        break;
    case '/':
        require 'view/bien.php';
        break;
    case '/holaMundo/hola':
        require './view/hola.php';
        break;
    case '/holaMundo/css':
        include_once './view/base.php';
        break;
    case '/holaMundo/partidos':
        // PartidosController::partidosPorCompetencia(liga);
        // PartidosController::partidosPorFecha(liga);
        require 'view/bien.php';
        break;
    case '/holaMundo/jugadores':
        require_once __DIR__.'/controller/JugadoresController.php';
        JugadoresController::listarTodos();
        break;
    default:
        http_response_code(404);
        require 'view/errores.php';
}
