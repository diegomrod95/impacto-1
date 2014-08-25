<?php

namespace Impacto\Controllers;

final class HomeController extends BaseController {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        \Impacto\ClassLoader::load_view("HomeView");
        
        $this->view = new \Impacto\Views\HomeView();
        $this->view->render();
    }
    
}