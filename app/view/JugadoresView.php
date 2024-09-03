<?php

class JugadoresView {
    static function jugadores($jugadores){
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\jugadores\tabla-jugadores.php';
        include_once $aqui.'\global\global2.php';
    }
}
