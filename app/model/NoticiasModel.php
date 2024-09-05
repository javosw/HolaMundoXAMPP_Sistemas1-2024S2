<?php 

class NoticiasModel{
    public static function ultimasNoticias(){
        require_once __DIR__ . '/MiConexion.php';
        require_once __DIR__ . '/Noticia.php';

        $query = 'SELECT * FROM Noticias';

        $miConexion = new MiConexion();
        $conn = $miConexion->getConnection();
        $stmt = $conn->prepare($query);
        $noticias = array();
        if ($stmt->execute()) {
            //$row = $stmt->fetch();
            //$table = $stmt->fetchAll();

            while ($row = $stmt->fetch()) {
                $noticias[] = new Noticia($row['fecha'],$row['contenido']);
            }
        }
        return $noticias;
    }
}

