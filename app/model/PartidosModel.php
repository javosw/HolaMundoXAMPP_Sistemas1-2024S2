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
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Partido.php';

        $query = 'SELECT fecha, rival, estadio FROM Partidos WHERE Partidos.competicion = :competicion';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':competicion',$competicion);
        $partidos = array();
        if ($stmt->execute()) {
            //$row = $stmt->fetch();
            //$table = $stmt->fetchAll();

            while ($row = $stmt->fetch()) {
                $partidos[] = new Partido($row['fecha'],$row['rival'],$row['estadio']);
            }
        }
        return $partidos;
    }
}

