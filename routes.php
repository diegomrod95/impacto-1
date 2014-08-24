<?php

namespace Impacto;

/**
 * Classe responsável por fazer o gerenciamento e redirecionamento das url do site.
 * Enviando cada request para o seu respectivo controller.
 */
final class Routes {

    /**
     * Variável estatica que armazena uma tabela com o padão da url e o nome do
     * controller.
     *
     * GET: /teste => TesteController
     */
    private static $ROUTES = array(
        "curso" => "CursoController"
    );
    
    /**
     * Retorna o controller respectivo à url passada como argumento.
     *
     * @returns string
     */
    public static function get ( $url /* string */ ) {
        if ( isset($url) && is_string($url) && $url != "" ) {
            return self::$ROUTES[$url];
        } else {
            throw new \Exception("Argumento não é uma string válida.");        
        }
    }
    
    /**
     * Diz se uma url esta cadastrada na tabela de roteamento do site.
     *
     * @returns bool
     */
    public static function exists ( $url /* string */ ) {
        if ( isset($url) && is_string($url) && $url != "" ) {
            return array_key_exists($url, self::$ROUTES);
        } else {
            throw new \Exception("Argumento não é uma string válida.");        
        }
    }

}