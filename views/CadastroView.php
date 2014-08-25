<?php

namespace Impacto\Views;

final class CadastroView extends LayoutBaseView {
    
    private $action;
    
    function __construct ( $action /* number */ ) {
        parent::__construct();
        $this->action = $action;
    }
    
    public function render_body () {
        if ($this->action === 1) {
            include \Impacto\ClassLoader::get_view("public/cadastro/form");
        }
    }    
    
}