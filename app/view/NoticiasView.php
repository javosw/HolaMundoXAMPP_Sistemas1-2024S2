<?php

class NoticiasView{
    public static function ultimasNoticias($noticias) {
        $aqui = __DIR__;
        include_once $aqui.'\global\global1.php';
        include_once $aqui.'\noticias\noticias.php';
        include_once $aqui.'\global\global2.php';
    }
}
