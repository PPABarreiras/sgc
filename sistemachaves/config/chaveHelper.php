<?php

include_once "chave.php";

if(isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];

    if($tipo === 'cadastrarchave'){
        cadastrar();
    }
}

// $nome = $_POST['nome'];
// $predio = $_POST['predio'];

// echo $predio;
// echo $nome;
function cadastrar()
{
    $numero= $_POST['nome'];
    $predio = $_POST['predio'];
    $desc = $_POST['desc'];
    $chave = new Chave($numero, $predio, $desc);
    $chave->inserir();
    header("Location:../Funcionario/gerenciamento.php");
}

?>