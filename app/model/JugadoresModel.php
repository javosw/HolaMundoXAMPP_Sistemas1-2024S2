<?php
class JugadoresModel
{

    public static function jugadores()
    {
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Jugador.php';

        $query = 'SELECT Jugadores.dorsal, Personas.nombre FROM Jugadores INNER JOIN Personas ON Jugadores.nit = Personas.nit';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();
        $stmt = $conn->prepare($query);
        $jugadores = array();
        if ($stmt->execute()) {
            //$row = $stmt->fetch();
            //$table = $stmt->fetchAll();

            while ($row = $stmt->fetch()) {
                $jugadores[] = new Jugador($row['dorsal'],$row['nombre']);
                //$jugadores[] = new Jugador(htmlspecialchars($row['dorsal']),htmlspecialchars($row['nombre']));
            }
        }
        return $jugadores;
    }

    public static function jugadoresAPI()
    {
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Jugador.php';

        $query = 'SELECT Jugadores.dorsal, Personas.nombre FROM Jugadores INNER JOIN Personas ON Jugadores.nit = Personas.nit';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();
        $stmt = $conn->prepare($query);
        if ($stmt->execute()) {
            //$row = $stmt->fetch();
            $table = $stmt->fetchAll();
            echo json_encode($table);
            header('HTTP/1.1 201 TODO BIEN');
            header("Content-Type: application/json");
        } else {
            header('HTTP/1.1 404 LAS COSAS PASAN');
        }
    }
}
