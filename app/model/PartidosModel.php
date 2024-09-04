<?php 

class PartidosModel{
    public static function competiciones(){
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Competicion.php';

        $query = 'SELECT competicion FROM Competiciones';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();
        $stmt = $conn->prepare($query);
        $competiciones = array();
        if ($stmt->execute()) {
            //$row = $stmt->fetch();
            //$table = $stmt->fetchAll();

            while ($row = $stmt->fetch()) {
                $competiciones[] = new Competicion($row['competicion']);
            }
        }
        return $competiciones;
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

