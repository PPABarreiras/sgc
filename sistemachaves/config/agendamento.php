<?php

include_once 'banco.php';

class Pendente{
    public $id_chave;
    public $matricula_cliente;
    public $data_agendamento;
    public $nome_cliente;

    function __construct($id_chave, $matricula_cliente, $data_agendamento, $nome_cliente)
    {
        $this->id_chave = $id_chave;
        $this->matricula_cliente = $matricula_cliente;
        $this->data_agendamento = new DateTime($data_agendamento);
        $this->nome_cliente = $nome_cliente;
    }

    static function carregar() {
        try {
            $banco = new Banco();
            $conexao = $banco->conectar();
            $stmt = $conexao->prepare("select a.idChave, a.id_cliente, a.data_agendar, c.nome from agendar a inner join cliente c on a.id_cliente = c.matricula");
            $stmt -> $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $pendente = null;
            foreach($stmt->fetchAll() as $v => $value){
                $pendente = new Pendente(
                    $value['idChave'],
                    $value['$id_cliente'],
                    date($value['data_agendar']),
                    $value['nome']);
            }
            return $pendente;
        } catch (PDOException $ex) {
            echo 'Erro: ' . $ex->getMessage();
        }
    }
}