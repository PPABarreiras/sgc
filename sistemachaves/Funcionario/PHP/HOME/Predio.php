<?php

include_once 'Insert.php';

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
    if($tipo === "cadastrarPredio"){
        cadastrar_Predio();
    } else if($tipo === "excluirPredio"){
        excluir_Predio();
    }
}

function cadastrar_Predio(){
    $NovoPredio = $_POST['idNovoPredio'];
    $predio = new Predio($NovoPredio);
    $predio->inserir();
}

function excluir_Predio(){
    $ExcluirPredio = $_POST['idExclPredio'];
    $predio = new Predio($ExcluirPredio);
    $predio->excluir();
}