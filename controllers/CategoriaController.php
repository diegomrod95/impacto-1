<?php

namespace Impacto\Controllers;

final class CategoriaController extends BaseController {
    
    public function lista ( $id /* number */ ) {
    
        \Impacto\ClassLoader::load_view("CategoriaView");
    
        $this->view = new \Impacto\Views\CategoriaView($id);
        
        $this->view->render();
    }
    
    public function index () {
        lista(1);
    }
    
}