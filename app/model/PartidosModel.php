<?php 

class PartidosModel{
    public static function competiciones(){
        return array(
            'Liga Nacional 2024',
            'Copa Oro 2023',
            'Liga Nacional 2023',
            'Super Copa 2022'
        );
    }

    public static function partidosPorCompeticion($competicion){
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
}

