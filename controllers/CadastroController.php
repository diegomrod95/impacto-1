<?php

namespace Impacto\Controllers;

final class CadastroController extends BaseController {

    public function index () {
        
        \Impacto\ClassLoader::load_view("CadastroView");
        
        $this->view = new \Impacto\Views\CadastroView(1);
        $this->view->render();
    }
    
}