<?php

class Model_Usuario extends RedBean_SimpleModel {
    // TODO : Validar setters
	
    public function set_nome ( $nome /* string */ ) {
    	$this->nome = $nome;
    }
    
    public function set_cpf ( $cpf /* string */ ) {
        $this->cpf = $cpf;
    }
    
    public function set_rg ( $rg /* string */ ) {
    	$this->rg = $rg;
	}
    
    public function set_email ( $email /* string */ ) {
        $this->email = $email;    
    }
    
    public function set_genero ( $genero /* string */ ) {
    	$this->genero = $genero;
    }
    
    public function set_data_nascimento ( $data_nascimento /* string */ ) {
        $this->data_nascimento = $data_nascimento;
    }
	
	public function set_cep ( $cep /* string */ ) {
		$this->cep = $cep;
	}
	
	public function set_complemento ( $complemento /* string */ ) {
		$this->complemento = $complemento;
	}
    
    public function set_logradouro ( $logradouro ) {
        $this->logradouro = $logradouro;
    }
	
    public function set_numero ( $numero /* string */ ) {
        $this->numero = $numero;
    }
    
	public function set_bairro ( $bairro /* string */ ) {
		$this->bairro = $bairro;
	}
	
	public function set_cidade ( $cidade /* string */ ) {
		$this->cidade = $cidade;
	}
	
	public function set_estado ( $estado /* string */ ) {
		$this->estado = $estado;
	}
	
	public function set_pais ( $pais /* string */ ) {
		$this->pais = $pais;
	}
	
	public function set_endereco ( $endereco /* string */ ) {
		$this->endereco = $endereco;
	}
	
	public function set_telefone ( $telefone /* string */ ) {
		$this->telefone = $telefone;
	}
	
	public function set_celular ( $celular /* string */ ) {
		$this->celular = $celular;
	}
	
	public function set_necessidade_especial ( $necessidade /* string */ ) {
		$this->necessidade_especial = $necessidade;
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