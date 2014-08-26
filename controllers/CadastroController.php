<?php

namespace Impacto\Controllers;

final class CadastroController extends BaseController {

    public function index () {
        \Impacto\ClassLoader::load_view("CadastroView");
        
        $this->view = new \Impacto\Views\CadastroView(1);
        $this->view->render();
    }
    
    private function validate_form () {
        return \Impacto\Html\Validate::form($_POST['validation_token']);
    }
    
    public function registrar () {
        \Impacto\ClassLoader::load_model("usuario");
        
        try {
            if (!self::validate_form()) {
                throw new \Exception("Form não é válido!");
            }
            $user = new \Model_Usuario();
        
            $user->set_nome($_POST['nome']);
            
            echo $user->nome;
        } catch(Exception $ex) {
            echo $ex->getMessage();    
        }
    }
    
}