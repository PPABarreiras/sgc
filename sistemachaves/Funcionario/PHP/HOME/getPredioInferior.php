<?php
    
    include_once ('Predio.php');
 

    function exibir(){
        $banco = new Banco();
        $conexao = $banco -> conectar();
            $stmt = $conexao -> prepare("SELECT * FROM predio");
            $stmt -> execute();
                $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($stmt);
    }

    exibir();
