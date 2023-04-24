<?php

include_once 'ClassRetirar.php';
include_once 'retirar.php';
include_once '../Conexao.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === 'RetirarChave'){
        Retirar_C();
    }
}

function Retirar_C(){
    $id_chave = $_POST['idChave'];
    $id_cliente = $_POST['Matricula'];
    $hora = $_POST['hora'];
    $senha = $_POST['senha'];
    // echo $id_chave;
    $retirada = new Retirar($id_chave, $id_cliente, $hora, $senha);
    $retirada->Retirar_Chave();
    registrarUSOPend($id_chave);
    // header("Location:../Funcionario/sala.php?id_predio=");
}

//Aqui
function registrarUSOPend($idChave){
    //$dataEntrega = $this->Data;
    $banco = new Banco();
    $conexao = $banco->conectar();
    //$dtEntrega=date("Y-m-d",strtotime($dataEntrega));

    try{
        $retiradas = getRetirada();

        foreach($retiradas as $retirar){
            if($retirar->retirado === 'RetiradaEmUso'){
                $stmt = $conexao->prepare("UPDATE chave SET situacao = 1 WHERE idChave = :id_chave");
                $stmt->bindParam(':id_chave', $idChave);
                $stmt->execute();
            }
                
        }
            
     //   }

    } catch(PDOException $ex){
        echo "Erro ao excluir predio: " . $ex;
    }
}

function getRetirada(){
    $banco = new Banco();
    $conexao = $banco->conectar();
    try{
        $stmt = $conexao->prepare("select chave.idChave, 
        chave.situacao, 	
        CASE WHEN  CURTIME() <= retirar.hora THEN 'RetiradaEmUso'
        WHEN CURTIME() > retirar.hora THEN 'Pendente'
        WHEN chave.situacao = 1 THEN 'AgendadaEstaEmUSo'
        ELSE 'Disponivel' end as retirado, chave.idPredio, chave.descricao 
        from chave left join retirar on (chave.idChave = retirar.idChave)");
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $retiradas = array();
        $stmt->execute();
        foreach($stmt->fetchAll() as $v => $value){
            $retirada = new RetirarE(
                $value['idChave'],
                $value['situacao'],
                $value['retirado'],
                $value['idPredio'],
                $value['descricao']
            );
            
            array_push($retiradas, $retirada);
        }

        //echo json_encode($agendas);
        return $retiradas;
        
    }catch(PDOException $ex){
        echo $ex;
    }
}


?>