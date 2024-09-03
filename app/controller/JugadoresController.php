<?php

// se podria consultar un partido por su fecha
// tambien se podrian consultar los siguientes partidos o los partidos de un torneo
require_once __DIR__.'/../model/Jugador.php';

class JugadoresController{

    static function jugadores(){
        // MODEL
        $jugadores = array(new Jugador(10,'messi'),new Jugador(7,'ronaldo'),new Jugador(8,'pescadito'),new Jugador(1,'navas'));
        
        // VIEW
        require_once __DIR__.'/../view/JugadoresView.php';
        JugadoresView::jugadores($jugadores);
    }
}


?>