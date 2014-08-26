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
        
            $user->set_email($_POST['email']);
            //$user->set_senha($_POST['senha'], $_POST['senha_rep']);
            $user->set_nome($_POST['nome']);
            $user->set_cpf($_POST['cpf']);
            $user->set_rg($_POST['rg']);
            $user->set_data_nascimento($_POST['nascimento']);
            $user->set_genero($_POST['genero']);
            $user->set_cep($_POST['cep']);
            $user->set_numero($_POST['numero']);
            $user->set_complemento($_POST['complemento']);
            $user->set_endereco($_POST['endereco']);
            $user->set_bairro($_POST['bairro']);
            $user->set_cidade($_POST['cidade']);
            $user->set_pais($_POST['pais']);
            $user->set_telefone($_POST['telefone']);
            $user->set_celular($_POST['celular']);
            $user->set_necessidade_especial($_POST['portador_deficiencia']);
            
            //$user->send_email()?
            
            print_r($user);
        } catch(Exception $ex) {
            echo $ex->getMessage();    
        }
    }
    
}