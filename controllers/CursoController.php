<?php

namespace Impacto\Controllers;

final class CursoController extends BaseController {

    public function index() {
        echo "We are in Curso Index";    
    }
    
    public function listar() {
        echo "We are in Curso Listar";    
    }
    
    public function detalhe( $id ) {
        echo "We are in Curso Detalhe";
    }
    
}