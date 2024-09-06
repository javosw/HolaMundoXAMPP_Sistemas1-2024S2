<?php

class JugadoresView {
    static function jugadores($jugadores){
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\jugadores\tabla-jugadores.php';
        include_once $aqui.'\global\global2.php';
    }

    static function formAddJugador(){
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\jugadores\add-jugador.php';
        include_once $aqui.'\global\global2.php';
    }

    static function addJugador($jugadores, $jugador){
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\jugadores\added-jugador.php';
        include_once $aqui.'\global\global2.php';
    }
}
