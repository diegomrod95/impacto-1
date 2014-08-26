<?php

namespace Impacto;

/**
 * Classe responsável por carregar arquivos estáticos.
 */
final class StaticLoader {
    
    /**
     * Endereço do host da aplicação.
     */
    private static $HOST = "http://impacto.equipemegacode.com";
    
    /**
     * Diretório com os arquivos estaticos.
     */
    private static $FOLDER = "static";
    
    /**
     * Imprime o link do arquivo estático.
     */
    public static function get_url ( $resource /* string */) {
        echo self::$HOST . "/" . self::$FOLDER . "/" . $resource;
    }
    
    /**
     * Carrega um script.
     */
    public static function get_script ( $script /* string */ ) {
        self::get_url("js" . "/" . $script . ".js");
    }
    
    /**
     * Carrega uma folha de estilo.
     */
    public static function get_style ( $style /* string */ ) {
        self::get_url("css" . "/" . $style . ".css");
    }
    
    /**
     * Carrega uma imagem. obs: deve-se passar o nome e a extensão.
     * \Impacto\StaticLoader::get_image("folder/subfolder/exemplo.png");
     */
    public static function get_image ( $image /* string */ ) {
        self::get_url("image" . "/" . $image);
    }
    
}