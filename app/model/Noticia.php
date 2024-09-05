<?php

class Noticia
{
    public $fecha;
    public $contenido;

    public function __construct($fecha, $contenido)
    {
        $this->fecha = $fecha;
        $this->contenido = $contenido;
    }
}
