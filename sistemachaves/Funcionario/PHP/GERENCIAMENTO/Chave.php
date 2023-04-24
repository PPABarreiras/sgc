<?php

    include_once ('insertChaves.php');

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        if($tipo === "AddChave"){
            cadastroChave();
        }else if($tipo === 'excluirChave'){
            remover();
        }else if($tipo === "alterarChave"){
            alterar();
        }
    }

    function cadastroChave(){
        $idChave = $_POST['idChave'];
        $Situacao = 0;
        $idPredio = $_POST['idPredio'];
        $Descricao = $_POST['DescriChave'];
        $chave = new Chave($idChave, $Situacao, $idPredio, $Descricao);
        $chave -> inserirChave();
        $chave -> inserirSala();
        header("Location: http://localhost/SGC_FINAL/SISTEMACHAVES/Funcionario/Gerenciamento.php");
    }

    function exibirChaves(){
        $banco = new Banco();
        $conn = $banco -> conectar();
      //  $sql = $conn->prepare("SELECT * FROM chave");
      $sql = $conn->prepare("select chave.idChave, chave.situacao, chave.idPredio, chave.descricao, 
      agendar.turno, agendar.id_cliente, agendar.data_agendar from chave left join agendar on (chave.idChave = agendar.idChave)");
        $sql -> execute();
            $dadosChave = $sql->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($dadosChave);
    }
    print_r(exibirChaves());

    //if(isset($_POST) && isset($_POST[ 'numChave']) && isset($_POST[ 'numPredio'])) { 
            
   // }

    function alterar(){
        $idChave = $_POST['idChave'];
        $Situacao = 0;
        $idPredio = $_POST['idPredio'];
        $Descricao = $_POST['descriChave'];

        $chave = new Chave($idChave, $Situacao, $idPredio, $Descricao);
        $chave -> alterarChave();
        header("Location: http://localhost/SGC_FINAL/SISTEMACHAVES/Funcionario/Gerenciamento.php");
    }

    function remover(){
        $idChave = $_POST['idChave'];
        $Situacao = 0;
        $idPredio = $_POST['idPredio'];
        $Descricao = 'Sala';
        $chave = new Chave($idChave, $Situacao, $idPredio, $Descricao);
        // echo  $idChave. '<br>';
        // echo $Situacao . '<br>';
        // echo $idPredio . '<br>';
        $chave -> excluirChave();
        header("Location: http://localhost/SGC_FINAL/SISTEMACHAVES/Funcionario/Gerenciamento.php");
    }

    