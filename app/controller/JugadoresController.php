<?php

// se podria consultar un partido por su fecha
// tambien se podrian consultar los siguientes partidos o los partidos de un torneo
require_once __DIR__.'/../model/Jugador.php';

class JugadoresController{

    static function jugadoresAPI() {
        // MODEL
        require_once __DIR__.'/../model/JugadoresModel.php';
        JugadoresModel::jugadoresAPI();
    }

    static function jugadores(){
        // MODEL
        require_once __DIR__.'/../model/JugadoresModel.php';
        $jugadores = JugadoresModel::jugadores();
        
        // VIEW
        require_once __DIR__.'/../view/JugadoresView.php';
        JugadoresView::jugadores($jugadores);
    }
}
?>