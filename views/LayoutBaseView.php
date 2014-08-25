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
        
        $this->categorias = \R::getAll( "SELECT * FROM `categoria`" );
    }
    
    /**
     * Renderiza o layout base do site.
     */
    public function render() {
        include \Impacto\ClassLoader::get_view("layout_base");
        \R::close();
    }
}