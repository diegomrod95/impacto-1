<?php

namespace Impacto\Controllers;

/**
 * Classe base para todos os controllers. A classe herdeira deve implmentar o 
 * metodo index, que será usada para representar a secção que o controller
 * representa.
 */
abstract class BaseController {
    
    /**
     * View do controller.
     */
    protected $view;
    
    /**
     * Metodo abstrato que deve ser implmentado. Usado para mostrar secção
     * do controller.
     */
    public abstract function index();
    
    public function get_view() {
        return $this->view;
    }
    
    public function set_view( $view /* BaseView */ ) {
        $this->view = $view;
    }
}