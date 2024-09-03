<?php
class JugadoresModel{

    public static function jugadores() {
        require_once __DIR__.'/Jugador.php';
        return array(new Jugador(10,'messi'),new Jugador(7,'ronaldo'),new Jugador(8,'pescadito'),new Jugador(1,'navas'));
    }

}
