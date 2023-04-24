<?php

include_once 'banco.php';

class Predio{
    public $id_predio;
    
    function __construct($id_predio){
        $this->id_predio = $id_predio;    
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("INSERT INTO predio VALUE (:id_predio)");
            $stmt->bindParam(':id_predio', $this->id_predio);
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao inserir aluno: " . $ex;
        }
    }   
}