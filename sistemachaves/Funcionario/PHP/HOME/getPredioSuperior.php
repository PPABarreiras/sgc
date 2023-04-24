<?php
    
    include_once ('Predio.php');
    
    function exibir(){
        $banco = new Banco();
        $conexao = $banco -> conectar();
            $stmt = $conexao -> prepare("SELECT * FROM predio");
            $stmt -> execute();
                $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($stmt as $id) {
                    echo "<li class='Modelo_Predio'>
                        <div>
                            <h4 class='Modelo_Predio_h4_1' >Prédio</h4>
                            <h4 class='Numeracao_IdPredio'>".$id["idPredio"]."</h4>
                        </div>
                        <img src='../Assets/Prédio.png' alt='Ilustração Prédio'>
                    </li>";
                }
    }   
    
    exibir();
    header("Refresh: 1");