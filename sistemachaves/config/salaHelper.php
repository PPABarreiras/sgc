<?php

include_once "sala.php";

// function excluir_sala(){
//         $id_aluno = $_POST["id_aluno"];
//         $aluno = Aluno::carregar($id_aluno);
//         $aluno->excluir();
// }

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === 'cadastrarsala'){
        cadastrar();
    }else if($tipo === "excluiraluno"){
    }
}

function cadastrar()
{
    $numero = $_POST['numero'];
    $sala = new Sala();
    $id_predio = $_POST['id_predio'];

    $sala -> id_sala = $numero;

    $sala->inserir($id_predio);
    header("Location:../Funcionario/sala.php?id_predio=".$id_predio);
}


function getSalas(){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from sala");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $salas = array();
        foreach($stmt->fetchAll() as $v => $value){
            $sala = new Sala();
            $sala->id_sala = $value['id_sala'];
            array_push($salas, $sala);
        }
       return $salas;

    }catch(PDOException $ex){
        echo 'Erro; ' . $ex->getMessage();
    }
}



function getSalasPredio($id_predio){
    try{
        $banco = new Banco();
        $conexao = $banco->conectar();
        $stmt = $conexao->prepare("select * from sala where id_predio = :id_predio");
        $stmt->bindParam(':id_predio',$id_predio);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $salas = array();
        foreach($stmt->fetchAll() as $v => $value){
            $sala = new Sala();
            $sala->id_sala = $value['id_sala'];
            array_push($salas, $sala);
        }
       return $salas;

    }catch(PDOException $ex){
        echo 'Erro; ' . $ex->getMessage();
    }
}