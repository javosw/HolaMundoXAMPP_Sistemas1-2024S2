<?php

require_once __DIR__.'/../model/Partido.php';

class PartidosController{
    
    private static function getCompeticiones(){
        return array(
            'Liga Nacional 2024',
            'Copa Oro 2023',
            'Liga Nacional 2023',
            'Super Copa 2022'
        );
    }

    private static function getPartidos($competicion){
        require_once __DIR__.'/../model/Partido.php';

        return array(
            new Partido('2024-00-00',"RivalZZZ {$competicion}",'EstadioZZZ'),
            new Partido('2024-00-00','RivalZZZ 1','EstadioZZZ 1'),
            new Partido('2024-00-00','RivalZZZ 2','EstadioZZZ 2'),
            new Partido('2024-00-00','RivalZZZ 3','EstadioZZZ 3'),
            new Partido('2024-00-00','RivalZZZ 4','EstadioZZZ 4'),
            new Partido('2024-00-00','RivalZZZ 5','EstadioZZZ 5')
        );
    }

    public static function selectCompeticion(){
        // traer datos de las competiciones
        $competiciones = self::getCompeticiones();
        require_once __DIR__.'/../view/PartidosView.php';
        PartidosView::competiciones($competiciones);
    }

    public static function partidosPorCompeticion($competicion){
        // traer datos de las competiciones
        $competiciones = self::getCompeticiones();
        $partidos = self::getPartidos($competicion);

        require_once __DIR__.'/../view/PartidosView.php';        
        PartidosView::partidosPorCompeticion($competiciones,$partidos);
    }

}
