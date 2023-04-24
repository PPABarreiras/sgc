<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - CADASTRO</title>
    <!-- CSS GLOBAL -->
    <link href='../Funcionario/CSS/GLOBAL/Tab_Bar.css' rel='stylesheet'>
    <!-- CSS -->
    <link href="../Funcionario/CSS/GERENCIAMENTO/alterarchave.css" rel="stylesheet" type="text/css" />
    <link href="../Funcionario/CSS/GERENCIAMENTO/Gerenciamento.css" rel="stylesheet" type="text/css" />
    <!-- JAVASCRIPT GLOBAL -->
    <script src="../Funcionario/JS/GLOBAL/TabBar.js" type="text/javascript" defer></script>
    <!-- JAVASCRIPT -->
    <script src="../Funcionario/JS/GERENCIAMENTO/alterarchave.js" type="text/javascript" defer></script>
    <script src="../Funcionario/JS/GERENCIAMENTO/Gerenciamento.js" type="text/javascript" defer></script>
    <!--JQUERY/AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/Fonts&Color.css' rel='stylesheet'>
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
                        <a href="../Funcionario/Gerenciamento.php" class="Item_Barra active">
                            <div class="Div_Item_Barra">
                                <i class='bx bxs-key'></i>
                            </div>
                            <span class="Name_Item_Barra Status1">Gerenciamento</span>
                        </a>
                    </li>
                    <!-- Item 3 = Pendetes -->
                    <li class="Li_Barra">
                        <a href="../Funcionario/Pendente.php" class="Item_Barra">
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
        <div class="Main_Cont1">
            <i class='bx bx-chevron-right' ></i>
            <h3>Gerenciamento de chaves</h3>
        </div>
        <!-- Bloco com Predios -->
        <div class="Main_Cont2">
           <!-- Adicionar Chave -->
           <div class="botao chave" id="botao-cadastro1"><h3>Cadastro de Chaves</h3></div>
            <div class="form1_cad_Chaves" id="formChave">
                <div id="botao-cadastro2"><h3>Cadastro de Chaves</h3></div>
                
                <form id="CadastroChaves" action="../Funcionario/PHP/GERENCIAMENTO/Chave.php"
                 method="POST">
                    <div style="display: none"></div>
                    <div>
                        <label for="idChave">Número da chave: </label>
                        <input type="number" name="idChave" id="idChave">
                    </div>
                    <div>
                        <label for="idPredio">Número da Prédio: </label>
                        <input type="number" name="idPredio" id="idPredio">
                    </div>
                    <div>
                        <label for="idChave">Descrição da chave: </label>
                        <select id="DescriChave" name="DescriChave">
                            <option value="Sala">Sala</option>
                            <option value="Lab">Lab</option>
                            <option value="Auditório">Auditório</option>
                            <option value="Ginásio">Ginásio</option>
                            <option value="Banheiro">Banheiro</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" name="tipo" value="AddChave" style="display: none">
                        <input type="submit" value="Salvar" id="SubmitAddChave">
                    </div>
                </form>
            </div>
            <!-- Excluir Chave -->
            <div class="botao chave" id="botao-excluir1"><h3>Excluir Chaves</h3></div>
            
            <div class="form3_excl_Chaves" id="formChave">
                <div><h3>Excluir Chaves</h3></div>
                    <form id="ExcluirChaves" action="../Funcionario/PHP/GERENCIAMENTO/Chave.php" method="POST">
                        <div>
                            <label for="idChave">Número da chave: </label>
                            <input type="number" name="idChave" id="idChave">
                        </div>
                        <div>
                            <label for="idPredio">Número da Prédio: </label>
                            <input type="number" name="idPredio" id="idPredio">
                        </div>
                        <div>
                            <input type="text" name="tipo" value="excluirChave" style="display: none">
                            <input type="submit" value="Excluir" id="SubmitExcluirPredio">
                        </div>
                    </form>
            </div>
        </div>
    </main>
</body>
</html>