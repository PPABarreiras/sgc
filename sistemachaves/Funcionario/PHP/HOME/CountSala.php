<?php

include_once '../Conexao.php';

function countSala(){
        $banco = new Banco();
        $conexao = $banco->conectar();
        try{
            $stmt = $conexao->prepare("SELECT idPredio, COUNT(idChave) FROM chave GROUP BY idPredio");
            $stmt -> execute();
            $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($stmt);
        } catch (PDOException $e){
            echo "Erro ao exibir count sala" . $e;
        }
    }
print_r(countSala());