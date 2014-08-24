<?php

namespace Impacto\Controllers;

final class HomeController extends BaseController {
    
    public function index() {
        \Impacto\ClassLoader::load_view("HomeView");
        
        $this->view = new \Impacto\Views\HomeView();
        $this->view->render();
    }
    
}