<?php

namespace Impacto;

require __DIR__ . '/classloader/classloader.php';

/**
 * Bootstrap a aplicação.
 */
ClassLoader::load_all();

/**
 * Função auxiliar para fazer a chamada do controller correspondente à url
 */
function load_ctrl ( $url_parts /* array(string) */, $size /* number */ ) {
    
    // Verifica se a url esta registrada na tabela de redirecionamento
    if (Routes::exists($url_parts[0])) {
        
        // parte da url que indica o controller
        $cls = Routes::get($url_parts[0]);
        
        // carrega o script do controller
        ClassLoader::load_controller($cls);
        
        $namespace = "\Impacto\Controllers\%";
        
        // executa o metodo de entrada do controller
        if ($size == 1) {
            
            $name = str_replace("%", $cls, $namespace);
            $cls = new $name();
            $cls->index();
        
        // executa a action void do controller
        } else if ($size == 2) {
            
            $name = str_replace("%", $cls, $namespace);
            $method = $url_parts[1];
            
            if ( method_exists($name, $method) ) {
            
                $cls = new $name();
                $cls->$method();
            
            } else {
                throw new \Exception("Controller : $cls -> Action : $method não existe.");
            }
        
        // executa a action void do controller e passa o argumento
        } else if ($size == 3) {
            
            $name = str_replace("%", $cls, $namespace);
            $method = $url_parts[1];
            $arg = $url_parts[2];
            
            if ( method_exists($name, $method) ) {
            
                $cls = new $name();
                $cls->$method($arg);
            
            } else {
                throw new \Exception("Controller : $cls -> Action : $method não existe.");
            }
        
        }
    } else {
        throw new \Exception("Rota não existe.");
    }
}

/**
 * Carrega a home page.
 */
function load_home () {
    ClassLoader::load_controller("HomeController");
                
    $ctrl = new Controllers\HomeController();
    $ctrl->index();
}

/**
 * Entry Point da Aplicação.
 */
function main () {
    $url = "";
    
    // Verifica se a variável url esta presente na url de redirecionameto 
    // realizada pelo servidor.
    if ( isset($_GET['url']) ) {
        $url = $_GET['url'];
    
        try {
            $parts = trim($url, '/');
            $parts = explode('/', $parts);
            $size = sizeof($parts);
            
            // Verifica se a url é diferente de /, o que significa a home page
            if ($size >= 1) {
                load_ctrl($parts, $size);
            } else {
                load_home();
            }
        } catch (Exception $e) {
            // Show error message with $e if debug mode else error page
            echo $e->getMessage();
        }
    } else {
       load_home();
    }
}

main();