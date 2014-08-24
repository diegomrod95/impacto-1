<?php

namespace Impacto\Views;

/**
 * Classe base para todas as views. Classe abstratas herdeiras devem 
 * implementar o metodo render e deixar o render_body para a classe herdeiras.
 * O metodo render_body deve ser chamado no template base.
 */
abstract class BaseView {

    function __construct() {
    }
    
    /**
     * Metodo que renderiza a base da página.
     */
    public abstract function render(); 
    
    /**
     * Renderiza o corpo da página, prenchendo o template base.
     */
    protected abstract function render_body();
}