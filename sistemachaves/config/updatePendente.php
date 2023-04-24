<?php 

include_once '../Funcionario/PHP/conexao.php';

class Update{ 
    public $idChave;

    function __construct($idChave) { 
        $this->idChave = $idChave;
    }
    function atualizarPendente() {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            
            $stmt = $conexao->prepare("update chave set situacao = 0 where idChave = :idChave");
            $stmt->bindParam(':idChave', $this->idChave);
            $stmt->execute();
            $stmt = $conexao->prepare("delete from agendar where idChave = :idChave");
            $stmt->bindParam(':idChave', $this->idChave);
            

            $stmt->execute();
            $_SESSION['agendar_entregue'] = true;
        }
        catch(PDOException $ex) {
            echo 'Erro: ' . $ex->getMessage();
        }
    }
}