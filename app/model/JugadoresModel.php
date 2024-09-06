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
                $jugadores[] = new Jugador($row['dorsal'], $row['nombre']);
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
            header('HTTP/1.1 201 TODO BIEN');
            header("Content-Type: application/json");
            echo json_encode($table);
        } else {
            header('HTTP/1.1 404 LAS COSAS PASAN');
        }
    }

    public static function addJugador($dorsal, $nit, $nombre, $nacimiento)
    {
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Jugador.php';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();

        $queryPersonas = 'INSERT INTO Personas VALUES (:nit,:nombre,:nacimiento)';
        $queryJugadores = 'INSERT INTO Jugadores VALUES (:dorsal,:nit)';

        $stmtPersonas = $conn->prepare($queryPersonas);
        $stmtPersonas->bindParam(':nit', $nit);
        $stmtPersonas->bindParam(':nombre', $nombre);
        $stmtPersonas->bindParam(':nacimiento', $nacimiento);

        $jugador;
        if ($stmtPersonas->execute()) {
            $stmtJugadores = $conn->prepare($queryJugadores);
            $stmtJugadores->bindParam(':dorsal', $dorsal);
            $stmtJugadores->bindParam(':nit', $nit);

            if ($stmtJugadores->execute()) {
                $jugador = new Jugador($dorsal, $nombre);
            }
        }
        
        return $jugador;
    }
}
