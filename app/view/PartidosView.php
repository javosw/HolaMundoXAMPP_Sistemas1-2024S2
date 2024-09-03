<?php

class PartidosView{
    public static function competiciones($competiciones) {
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\partidos\select-competicion.php';
        include_once $aqui.'\global\global2.php';
    }

    public static function partidosPorCompeticion($competiciones,$partidos,$competicionSeleccionada){
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\partidos\select-competicion.php';
        include_once $aqui.'\partidos\tabla-partidos.php';
        include_once $aqui.'\global\global2.php';
    }
}
