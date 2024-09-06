<?php

class Persona
{
    public $nit,$nombre,$nacimiento;

    public function __construct($nit,$nombre,$nacimiento)
    {
        $this->nit = $nit;
        $this->nombre = $nombre;
        $this->nacimiento = $nacimiento;
    }
}
