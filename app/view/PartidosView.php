<?php

class PartidosView{
    public static function competiciones($competiciones) {

        $viewDir = __DIR__;
        include_once $viewDir.'\global1.php';
        include_once $viewDir.'\select-competicion.php';
        include_once $viewDir.'\global2.php';

    }

}
