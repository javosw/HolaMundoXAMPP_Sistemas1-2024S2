<?php

class Partido
{
    public $fecha;
    public $rival;
    public $estadio;

    public function __construct($fecha, $rival, $estadio)
    {
        $this->fecha = $fecha;
        $this->rival = $rival;
        $this->estadio = $estadio;
    }
}
