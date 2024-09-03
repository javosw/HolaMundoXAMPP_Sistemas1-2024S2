<?php

class JugadoresView {
    static function jugadores($jugadores){
        $viewDir = __DIR__;
        include_once $viewDir.'\global1.php';
        include_once $viewDir.'\tabla-jugadores.php';
        include_once $viewDir.'\global2.php';
    }
}
