<?php

namespace Impacto\Views;

final class HomeView extends LayoutBaseView {

    function __construct() {
        parent::__construct();
        
        $this->title = "Cursos inovadores de qualidade";
    }
    
    protected function render_body() {
        echo "Home View <br/>";
    }

}