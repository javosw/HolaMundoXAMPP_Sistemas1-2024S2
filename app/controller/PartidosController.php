<?php

require_once __DIR__.'/../model/Partido.php';

class PartidosController{
    public static function selectCompeticion(){
        // traer datos de las competiciones
        $competiciones = array('Liga Nacional 2024','Copa Oro 2023','Liga Nacional 2023','Super Copa 2022');
        require_once __DIR__.'/../view/PartidosView.php';
        PartidosView::competiciones($competiciones);
    }
}
