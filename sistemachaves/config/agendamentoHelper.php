<?php
include_once 'agendamento.php';
function getPendentes() { 
    try {
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select a.idChave, a.id_cliente, a.data_agendar, c.nome from agendar a inner join cliente c on a.id_cliente = c.matricula");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $pendentes = array();
        foreach ($stmt->fetchAll() as $v => $value) {
            $pendente = new Pendente(
                $value['idChave'],
                $value['id_cliente'],
                date($value['data_agendar']),
                $value['nome']);
                array_push($pendentes, $pendente);
        }
        return $pendentes;
    } catch (PDOException $ex) {
        echo 'Erro: ' . $ex->getMessage();
    }
}
?>