<?php 

/**
 * Model da tabela categoria
 */
class Model_Categoria extends RedBean_SimpleModel {
    
    public function get_certificacoes () {
        $sql = "SELECT C.* FROM `certificacao` AS C JOIN `certificacao_categoria` AS CC ON C.`id` = CC.`certificacao` WHERE `categoria` = :id";
        $rows = R::getAll($sql, array(":id" => $this->id));
        
        return R::convertToBeans('certificao', $rows);
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