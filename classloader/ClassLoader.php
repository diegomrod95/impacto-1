<?php

namespace Impacto;

/**
 * Classe responsável por carregar os scripts php do site. 
 */
final class ClassLoader {
    
    /**
     * Carrega os scripts essenciais para o funcionamento da aplicação.
     */
    public static function load_all() {
        require_once __DIR__ . '/../routes.php';
        require_once __DIR__ . '/../config.php';
        require_once __DIR__ . '/../static/StaticLoader.php';
        
        self::load_lib("rb/rb");
        
        self::load_controller("BaseController");
        
        self::load_view("BaseView");
        self::load_view("LayoutBaseView");
    }
    
    /**
     * Carrega um controller com base no nome da classe que deve corresponder 
     * ao do arquivo.
     */
    public static function load_controller ( $controller /* string */ ) {
        require_once __DIR__ . "/../controllers/$controller.php";
    }
    
    /**
     * Carrega uma view com base no nome de sua classe, que deve corresponder 
     * ao do arquivo.
     */
    public static function load_view ( $view /* string */ ) {
        require_once __DIR__ . "/../views/$view.php";
    }
    
    /**
     * Carrega o arquivo de bootstrap de uma aplicação.
     */
    public static function load_lib ( $lib /* string */ ) {
        require_once __DIR__ . "/../lib/$lib.php";
    }
    
    /**
     * Retorna o caminho do template correspondente à view.
     */
    public static function get_view ( $view /* string */ ) {
        return __DIR__ . "/../templates/$view.view.php";
    }
    
}