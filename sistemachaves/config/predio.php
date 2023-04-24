<?php

include_once "insertPredio.php";

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === "cadastrapredio"){
        cadastrar();
    }

}

function cadastrar()
{
    //$id_predio = filter_input (INPUT_POST, 'id_Novo_Predio', FILTER_SANITIZE_NUMBER_INT);
    $id_predio = $_POST['id_Novo_Predio'];
    $predio = new Predio($id_predio);
   
    $predio->inserir();
    header("Location: ../Funcionario/Home.php");
}