<?php

class JugadoresView {
    static function listarTodos($jugadores){
        $viewDir = __DIR__;
        include_once $viewDir.'\body1.php';
        include_once $viewDir.'\tabla-jugadores.php';
        include_once $viewDir.'\body2.php';
    }
}
