<?php

class Partido
{
    public $fecha;
    public $competicion;
    public $rival;
    public $estadio;

    public function __construct($fecha, $competicion, $rival, $estadio)
    {
        $this->fecha = $fecha;
        $this->competicion = $competicion;
        $this->rival = $rival;
        $this->estadio = $estadio;
    }
}
