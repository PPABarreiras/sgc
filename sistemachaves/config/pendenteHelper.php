<?php
include_once 'pendente.php';
include_once 'pendenteF.php';

function getPendente() { 
    $banco = new Banco();
    $conexao = $banco->conectar();
    try{
        $stmt = $conexao->prepare("select chave.idChave, 
        chave.situacao,
        cliente.matricula,
        cliente.nome,
        CASE WHEN  CURTIME() <= retirar.hora THEN 'RetiradaEmUso'
        WHEN CURTIME() > retirar.hora THEN 'Pendente'
        WHEN chave.situacao = 1 THEN 'AgendadaEstaEmUSo'
        ELSE 'Disponivel' end as retirado, chave.idPredio, chave.descricao 
        from chave inner join retirar on (chave.idChave = retirar.idChave)
        inner join cliente on (cliente.matricula = retirar.id_cliente)");
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $pendentes = array();
        $stmt->execute();
        foreach($stmt->fetchAll() as $v => $value){
            $pendente = new PendenteF(
                $value['idChave'],
                $value['situacao'],
                $value['matricula'],
                $value['nome'],
                $value['retirado'],
                $value['idPredio'],
                $value['descricao']
            );
            
            array_push($pendentes, $pendente);
        }

        //echo json_encode($agendas);
        return $pendentes;
    }catch(PDOException $ex){
        echo $ex;
    }
}