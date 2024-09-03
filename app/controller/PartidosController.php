<?php

require_once __DIR__.'/../model/Partido.php';

class PartidosController{
    
    public static function competiciones(){
        // MODEL
        require_once __DIR__.'/../model/PartidosModel.php';
        $competiciones = PartidosModel::competiciones();

        // VIEW
        require_once __DIR__.'/../view/PartidosView.php';
        PartidosView::competiciones($competiciones);
    }

    public static function partidosPorCompeticion($competicion){
        // MODEL
        require_once __DIR__.'/../model/PartidosModel.php';
        $competiciones = PartidosModel::competiciones();
        $partidos = PartidosModel::partidosPorCompeticion($competicion);

        // VIEW
        require_once __DIR__.'/../view/PartidosView.php';
        PartidosView::partidosPorCompeticion($competiciones,$partidos,$competicion);
    }
}
