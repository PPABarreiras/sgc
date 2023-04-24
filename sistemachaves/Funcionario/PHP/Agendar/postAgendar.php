<?php

include_once 'InsertAgendar.php';
include_once 'agendar.php';
include_once './Conexao.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === 'AgendarChave'){
        Agendar_C();
    }
}

function Agendar_C(){
    $id_chave = $_POST['idChave'];
    $id_cliente = $_POST['Matricula'];
    $turno = $_POST['turno'];
    $data = $_POST['data'];
    echo $id_chave;
    $predio = new Agendar($id_chave, $id_cliente, $turno, $data);
    $predio->Agendar_Chave();
    registrarUSO($id_chave);
    // $predio->getAgendar();
    // header("Location:../Funcionario/sala.php?id_predio=");
}


function registrarUSO($idChave){
    //$dataEntrega = $this->Data;
    $banco = new Banco();
    $conexao = $banco->conectar();
    //$dtEntrega=date("Y-m-d",strtotime($dataEntrega));

    try{
        $agendadas = getAgendada();

        foreach($agendadas as $agendar){
            if($agendar->agendado === 'sim'){
                $stmt = $conexao->prepare("UPDATE chave SET situacao = 1 WHERE idChave = :id_chave");
                $stmt->bindParam(':id_chave', $idChave);
                $stmt->execute();
            }
                
        }
            

            echo "Chave agendada";
     //   }

    } catch(PDOException $ex){
        echo "Erro ao excluir predio: " . $ex;
    }
}

function getAgendada(){
    $banco = new Banco();
    $conexao = $banco->conectar();
    try{
        $stmt = $conexao->prepare("select chave.idChave, chave.situacao,
        CASE WHEN agendar.data_agendar = date(now()) THEN 'sim'
        ELSE 'nao' end as agendado, chave.idPredio, chave.descricao, agendar.turno, agendar.id_cliente, agendar.data_agendar from chave left join agendar on (chave.idChave = agendar.idChave)");
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $agendas = array();
        $stmt->execute();
        foreach($stmt->fetchAll() as $v => $value){
            $agenda = new AgendarE(
                $value['idChave'],
                $value['situacao'],
                $value['agendado'],
                $value['idPredio'],
                $value['descricao']
            );
            
            array_push($agendas, $agenda);
        }

        //echo json_encode($agendas);
        return $agendas;
        
    }catch(PDOException $ex){
        echo $ex;
    }
}