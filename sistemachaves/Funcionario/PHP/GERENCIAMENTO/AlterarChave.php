<?php

    include_once ('insertAlterar.php');

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
         if($tipo === "alterarChave"){
            alterar();
        }
    }

    function alterar(){
        $idChave = $_POST['idChave'];
        $NewidChave = $_POST['NewidChave'];
        $NewDescricao = $_POST['NewDescricao'];

        $chave = new Chave($idChave, $NewidChave , $NewDescricao);
        $chave -> alterarChave();
    }
