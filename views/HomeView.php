<?php

namespace Impacto\Views;

final class HomeView extends LayoutBaseView {

    function __construct() {
        parent::__construct();
        
        $this->title = "Cursos inovadores de qualidade";
    }
    
    protected function render_body() {
        include \Impacto\ClassLoader::get_view("public/home/home");
    }

}