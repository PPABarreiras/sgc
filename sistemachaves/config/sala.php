<?php

include_once 'banco.php';

class Sala{
    public $id_sala;
    public $id_predio;

    function inserir($id_predio){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into sala (id_sala, id_predio) values (:id_sala, :id_predio)");
            $stmt->bindParam(':id_sala', $this->id_sala);
           
            $stmt->bindParam(':id_predio', $id_predio);
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao inserir sala: " . $ex;
        }
        
    }


    // static function carregar($id_aluno){
    //     try{
    //         $banco = new Banco();
    //         $conexao = $banco->conectar();
    //         $stmt = $conexao->prepare("select * from aluno where id_aluno = :id_aluno");
    //         $stmt -> bindParam(':id_aluno', $id_aluno);
    //         $stmt->execute();
    //         $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //         $aluno = null;
    //         foreach($stmt->fetchAll() as $v => $value){
    //             $aluno = new Aluno(
    //                 $value['nome'],
    //                 $value['telefone'],
    //                 $value['email'], 
    //                 $value['id_curso'], 
    //                 date($value['nascimento']), 
    //                 $value['sexo']);
    //                 $aluno->id = $value['id_aluno'];
    //         }   
    
    //         return $aluno;
    
    //     }catch(PDOException $ex){
    //         echo 'Erro; ' . $ex->getMassage();
    //     }
    // }
    
    // function excluir(){
    //     $banco = new Banco();
    //     $conexao = $banco->conectar();
    //     try{
    //         $stmt = $conexao->prepare("delete from aluno where id_aluno = :id_aluno");

    //         $stmt->bindParam(':id_aluno', $this->id);
    //         $stmt->execute();
        
    //     } catch(PDOException $ex){
    //         echo "Erro ao inserir aluno: " . $ex;
    //     }
    // }

   
}