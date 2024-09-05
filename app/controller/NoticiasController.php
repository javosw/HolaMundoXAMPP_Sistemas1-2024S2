<?php

require_once __DIR__.'/../model/Partido.php';

class NoticiasController{
    public static function ultimasNoticias(){
        // MODEL
        require_once __DIR__.'/../model/NoticiasModel.php';
        $noticias = NoticiasModel::ultimasNoticias();

        // VIEW
        require_once __DIR__.'/../view/NoticiasView.php';
        NoticiasView::ultimasNoticias($noticias);
    }
}
