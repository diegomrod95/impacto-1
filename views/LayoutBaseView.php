<?php

namespace Impacto\Views;

/**
 * View usada pela maioria das páginas do site principal.
 */
abstract class LayoutBaseView extends BaseView {

    protected $title;
    protected $categorias;
    
    function __construct () {
        parent::__construct();
        
        \Impacto\ClassLoader::load_model("categoria");
        
        try {
            $this->categorias = \R::getAll("SELECT * FROM `categoria` WHERE `ativo` = 's'");
        } catch (\Exception $ex) {
            $this->categorias = array();
        }
    }
    
    /**
     * Renderiza o layout base do site.
     */
    public function render() {
        include \Impacto\ClassLoader::get_view("layout_base");
        \R::close();
    }
}