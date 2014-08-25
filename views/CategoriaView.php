<?php

namespace Impacto\Views;

final class CategoriaView extends LayoutBaseView {
    
    protected $model;
    
    function __construct ( $id /* number */) {
        parent::__construct();
        
        \Impacto\ClassLoader::load_model("categoria");
        
        try {
            $this->model = \R::load("categoria", $id);
        } catch (Exception $e) {
            echo "Error!";
        }
    } 
    
    public function render_body () {
        include \Impacto\ClassLoader::get_view("public/categoria/lista");
    }
        
}