<?php

// se podria consultar un partido por su fecha
// tambien se podrian consultar los siguientes partidos o los partidos de un torneo
require_once __DIR__.'/../model/Jugador.php';

class JugadoresController{

    static function listarTodos(){
        $jugadores = array(new Jugador(10,'messi'),new Jugador(7,'ronaldo'),new Jugador(8,'pescadito'),new Jugador(1,'navas'));
        require_once __DIR__.'/../view/JugadoresView.php';
        JugadoresView::listarTodos($jugadores);
        /*echo '<table><tr><th>DORSAL</th><th>NOMBRE</th></tr>';
        foreach ($jugadores as $jugador) {
            echo '<tr>'; 
                echo "<td>{$jugador->dorsal}</td>";
                echo "<td>{$jugador->nombre}</td>";
            echo '</tr>';
        }
        echo '</table>';*/
        //include_once __DIR__.'/../view/tabla-jugadores.php';
    }
}


?>