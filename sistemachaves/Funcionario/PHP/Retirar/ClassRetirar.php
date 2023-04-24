<?php

include_once './Conexao.php';

class Retirar{
    public $idChave;
    public $id_cliente;
    public $hora;
    public $senha;
    function __construct($idChave, $id_cliente, $hora, $senha){
        $this->idChave = $idChave;   
        $this->id_cliente = $id_cliente; 
        $this->hora = $hora; 
        $this->senha = $senha;
    }

    function Retirar_Chave(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            
            $stmt = $conexao->prepare("INSERT INTO retirar (idChave, id_cliente, hora, senha) VALUES (:idChave, :id_cliente, :hora, :senha)");
            
            $stmt->bindParam(':idChave', $this->idChave);
            $stmt->bindParam(':id_cliente', $this->id_cliente);
            $stmt->bindParam(':hora', $this->hora);
            $stmt->bindParam(':senha', $this->senha);

            $stmt->execute();
            echo "Chave agendada";
            

        } catch(PDOException $ex){
            echo "Erro ao excluir predio: " . $ex;
        }
    }
    
    //registrarUSO($id_chave, $dataI);

    // function getAgendar(){
    //     $banco = new Banco();
    //     $conexao = $banco->conectar();

    //     try{

    //             $stmt = $conexao->prepare("select data_agendar from agendar where idChave = 100");

    //             $stmt->execute();

    //             echo "Chave agendada";

    //     } catch(PDOException $ex){
    //         echo "Erro ao excluir predio: " . $ex;
    //     }
    // }
    
}

?>