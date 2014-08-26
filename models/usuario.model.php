<?php

class Model_Usuario extends RedBean_SimpleModel {
    
    public function set_nome ( $nome /* string */ ) {
        if (isset($nome) && is_string($nome) && $nome != "") {
            $this->nome = $nome;
        } else {
            throw new Exception("O nome não é válido.");
        }
    }
    
    public function set_cpf ( $cpf /* string */ ) {
        // TODO: validar cpf
        if (isset($cpf) && is_string($cpf) && $cpf != "") {
            $this->cpf = $cpf;
        } else {
            throw new Exception("O cpf não é válido.");
        }
    }
    
    public function set_rg ( $rg /* string */ ) {
        // TODO: Validar rg
        if (isset($rg) && is_string($rg) && $rg != "") {
            $this->cpf = $rg;
        } else {
            throw new Exception("O cpf não é válido.");
        }
    }
    
    public function set_email ( $email /* string */ ) {
        // TODO: validar email
        $this->email = $email;    
    }
    
    public function set_gerenro ( $genero /* string */ ) {
        if ($genero === "s" || $genero === "n") {
            $this->genero = $genero;
        } else { 
            throw new Exception("Genero não é válido"); 
        }
    }
    
    public function set_data_nascimento ( $data_nascimento /* string */ ) {
        // TODO: validar data de nascimento
        $this->data_nascimento = $data_nascimento;
    }
    
    public function open() {
    }
    
    public function dispense() {
    }
    
    public function update() {
    }
    
    public function after_update() {
    }
    
    public function delete() {
    }
    
    public function after_delete() {
    }
        
}