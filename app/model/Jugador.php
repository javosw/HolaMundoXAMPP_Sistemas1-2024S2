<?php 
class Jugador{
    public $dorsal;
    public $nombre;

    public function __construct($dorsal = 0,$nombre = 'PLAYER') {
        $this->dorsal = $dorsal;
        $this->nombre = $nombre;
    }
}
