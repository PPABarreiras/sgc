<?php

    include_once '../Conexao.php';
    
    class Chave{
        public $idChave;
        public $NewidChave;
        public $NewDescricao;

        function __construct($idChave, $NewidChave, $NewDescricao){
            $this -> idChave = $idChave;
            $this -> NewidChave = $NewidChave;
            $this -> NewDescricao = $NewDescricao;
        }

        function alterarChave(){
            $banco = new Banco();
            $conexao = $banco->conectar();
            try{
                //update chave set idChave = 1, descricao= 'Lab' where idChave = 101;
                $stmt = $conexao->prepare("UPDATE chave SET idChave = :NewidChave, descricao = :NewDescricao WHERE idChave = :id_chave");
                $stmt->bindParam(':id_chave', $this->idChave);
                $stmt->bindParam(':NewidChave', $this->NewidChave);
                // $stmt->bindParam(':descricao', $this->Descricao);
                $stmt->bindParam(':NewDescricao', $this->NewDescricao);
                $stmt->execute();
        
            }catch(PDOException $ex){
            echo "Erro ao solicitar alteração de chave: " . $ex;
            }
        }

    }