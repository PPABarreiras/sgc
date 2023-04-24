<?php

include_once '../Conexao.php';

class Predio{
    public $idPredio;

    
    function __construct($idPredio){
        $this->idPredio = $idPredio;    
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("INSERT INTO predio VALUE (:idPredio)");
            $stmt->bindParam(':idPredio', $this->idPredio);
            $stmt->execute();

            echo "Prédio adicionar com sucesso";

        } catch(PDOException $ex){
            echo "Erro ao adicionar prédio";
        }
        
    }

    function excluir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("DELETE FROM predio WHERE (idPredio = :idPredio)");
            $stmt->bindParam(':idPredio', $this->idPredio);
            $stmt->execute();
            
            echo "Prédio excluido com sucesso";
            
        } catch(PDOException $ex){
            echo "Erro ao excluir predio: " . $ex;
        }
    }
}