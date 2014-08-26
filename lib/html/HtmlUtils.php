<?php

namespace Impacto\Html;

/**
 * Classe com funções úteis para o desenvolvimento dos templates.
 */
final class Utils {

    /**
     * Host absoluto.
     */
    private static $HOST = "http://impacto.equipemegacode.com";
    
    /**
     * Retorna a url absoluta com base na url relativa.
     */
    public static function get_url ( $link /* string */ ) {
        echo self::$HOST . "/" . $link;
    }
    
}

final class Validate {
    
    public static function form ( $token /* string */ ) {
        return $token == FORM_VALIDATION_TOKEN;    
    }
    
}