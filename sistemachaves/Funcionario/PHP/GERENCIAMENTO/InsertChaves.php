<?php

    include_once '../Conexao.php';
    
    class Chave{
        public $idPredio;
        public $idChave;
        public $Situacao;
        public $Descricao;

        function __construct($idChave, $Situacao, $idPredio, $Descricao){
            $this -> idChave = $idChave;
            $this -> Situacao = $Situacao;
            $this -> idPredio = $idPredio;
            $this -> Descricao = $Descricao;
        }

        function inserirChave(){
            $banco = new Banco();
            $conexao = $banco->conectar();
            try{
                $stmt = $conexao->prepare("INSERT INTO chave (idChave, situacao, idPredio, descricao)VALUES (:idChave, :Situacao, :idPredio, :Descricao)");
                $stmt -> bindParam(':idChave', $this->idChave);
                $stmt -> bindParam(':Situacao', $this->Situacao);
                $stmt -> bindParam(':idPredio', $this->idPredio);
                $stmt -> bindParam(':Descricao', $this->Descricao);
                $stmt -> execute();
            } catch (PDOException $e){
                echo 'erro ao enserir chave ' . $e;
            }
        }
        function inserirSala(){
            $banco = new Banco();
            $conexao = $banco->conectar();
            try{
                $stmt = $conexao->prepare("INSERT INTO sala VALUES (:idChave, :idPredio)");
                $stmt -> bindParam(':idChave', $this->idChave);
                $stmt -> bindParam(':idPredio', $this->idPredio);
                $stmt -> execute();
            } catch (PDOException $e){
                echo 'erro ao enserir chave ' . $e;
            }
        }

        function alterarChave(){
            $banco = new Banco();
            $conexao = $banco->conectar();
            try{
                $stmt = $conexao->prepare("UPDATE chave SET idChave = novaChave, descricao= novaDesc WHERE idChave = :id_chave");
                $stmt->bindParam('novaChave', $novoNumChave);
                $stmt->bindParam('novaDesc', $novaDesc);
                $stmt->bindParam(':id_chave', $this->idChave);
                $stmt->bindParam(':id_predio', $this->idPredio);
                $stmt->bindParam(':descricao', $this->Descricao);
                $stmt->execute();
        
            }catch(PDOException $ex){
            echo "Erro ao solicitar alteração de chave: " . $ex;
            }
        }

        function excluirChave(){
            $banco = new Banco();
            $conexao = $banco->conectar();
            try{
                $stmt = $conexao->prepare("DELETE FROM chave WHERE idChave = :id_chave AND idPredio = :id_predio");

                $stmt->bindParam(':id_chave', $this->idChave);
                $stmt->bindParam(':id_predio', $this->idPredio);
                $stmt->execute();
        
            }catch(PDOException $ex){
            echo "Erro ao remover chave: " . $ex;
            }
        }

    }