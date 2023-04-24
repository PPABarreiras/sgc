<?php
include_once '../Funcionario/PHP/Conexao.php';
include_once '../config/pendenteHelper.php';
include_once '../config/updatePendenteHelper.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - CADASTRO</title>
    <!-- CSS GLOBAL -->
    <link href='./CSS/GLOBAL/Tab_Bar.css' rel='stylesheet'>
    <!-- CSS -->
    <link href="./CSS/pendente.css" rel="stylesheet" type="text/css" />
    <!-- JAVASCRIPT GLOBAL -->
    <script src="./JS/GLOBAL/TabBar.js" type="text/javascript" defer></script>
    <!-- JAVASCRIPT -->
    <script src="./JS/agendamento.js" type="text/JavaScript" defer ></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='./CSS/GLOBAL/Fonts&Color.css' rel='stylesheet'>
</head>
<body>
    <div class="indicador1">
        <div>
            <i class='bx bx-chevron-left'></i>
            <i class='bx bx-chevron-left'></i>
        </div>
    </div>
    <!-- POPUPS -->

    <header class="Header">
        <!-- Barra Laterial -->
        <nav class="Nav">
            <!-- Logo SGC -->
            <div class="Logo_SGC">
                <!-- Logo SGC -->
                <div>
                    <img src="../Assets/Logo 1.png" alt="Logo SGC">
                    <span>Sistema de Gerenciamento de Chaves</span>
                </div>
                <!-- Alternativa Logo SGC -->
                <div>
                    <img src="../Assets/Chave.png" alt="Logo SGC">
    
                </div>  
            </div>
            <!-- Container Com Opções da Barra Lateral -->
            <div class="Container_Opc">
                <!-- Lista dos Itens -->
                <ul class="Ul_Barra">
                    <!-- Item 1 = Home -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Home.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-home'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Home</span>
                        </a>
                    </li>
                    <!-- Item 2 = Cadastro -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Gerenciamento.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Gerenciamento</span>
                        </a>
                    </li>
                    <!-- Item 3 = Pendetes -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra active">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Pendente</span>
                        </a>
                    </li>
                    <!-- Item 4 = Solicitações -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Solicitacoes.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-archive-in'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Solicitações</span>
                        </a>
                    </li>
                    <!-- Item 5 = Agendamento -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Agendamento.php" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bx-bell'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Agendamento</span>
                        </a>
                    </li>
                    <!-- Item 6 = Sobre -->
                    <li class="Li_Barra">
                        <div></div>
                        <a href="#" class="Item_Barra">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-group'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Sobre</span>
                        </a>
                    </li>
                    <!-- Item 7 = Sair -->
                    <li class="Li_Barra">
                        <a href="../config/logout.php" class="Item_Barra_Sair">
                            <i class='bx bx-exit'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav> 
        <!-- Indicadores do Status da Barra Lateral -->
            <div class="indicadores">
                <div class="indicador2"></div>
            </div>
    </header>
    <main class="Main">
        <!-- Bloco com Nome do Usuário -->
        <?php
            if (isset($_SESSION['agendar_entregue'])):
            ?>
            <script>
                alert('Chave entregue com sucesso!');
            </script>
            <?php
            endif;
            unset($_SESSION['agendar_entregue']);
            ?>
        <div class="Main_Cont1">
        <i class='bx bx-chevron-right' ></i>
            <h3>Chaves Pendentes</h3>
        </div>
        <!-- Bloco com chaves pendentes -->
        <?php
        $pendentes = getPendente();
        foreach ($pendentes as $pen) {
            if($pen->retirado === 'Pendente' and $pen->situacao === 1){
                echo '<div class="Main_Cont2">' . 
            
            '<form name="formAgend" method="POST" action="../config/updatePendenteHelper.php" target="_self" onsubmit="return atualizar()">'.
            '<div class = "container-pendente">
            <input style="display: none" name="tipo" id="tipo" type="text" value="updatePendente">
            <img src="../Assets/Chave.png" alt="chave do container">
            <div class = "linha-horizontal"></div>'.
            //Inicio informacoes pendente
            '<div class="informacoes-pendente">' .
            '<div class="container-input">'.
            '<label for="idChave">Chave:</label>'.
            '<input type="number" readonly name="idChave" value="'. $pen->idChave. '" class="input">' .
            '</div>'.
            '<div class="container-input">' .
            '<label for="nome_cliente">Usuário: </label>'.
            '<input type="text" readonly name="nome_cliente" value="'. $pen->nome . '" class="input">' .
            '</div>'.
            '</div>'.
            //Fim informações pendente
            '<div class="botao-entregar">
            <input type="submit" value="entregue" class="botao-chave">
            <i class="bx bx-check-circle" id="icone-entregar"></i>
            </div>
            </div>
            </form>
            </div>';
            }
        }
        ?>
        <!-- Bloco com Chaves -->
        <div class="Main_Cont3">
        </div>
    </main>
</body>
</html>