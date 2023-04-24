<?php
include_once 'banco.php';
class Chave{
    public $id_chave;
    public $situacao; 
    public $id_predio;

    public $desc;

    function __construct($id_chave, $id_predio, $descricao){
        $this->id_chave = $id_chave;
        $this->id_predio = $id_predio;
        $this->desc = $descricao;
    }

    function inserir(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("insert into chave (id_chave, situacao, id_predio, descricao) values (:id_chave, :situacao, :id_predio, :descricao)");
            $stmt->bindParam(':id_chave', $this->id_chave);
            $situacao = 1;
            $stmt->bindParam(':situacao', $situacao);
            $stmt->bindParam(':id_predio', $this->id_predio);
            $stmt->bindParam(':descricao', $this->desc);
            $stmt->execute();

        } catch(PDOException $ex){
            echo "Erro ao inserir chave: " . $ex;
        }
    }
}
?>