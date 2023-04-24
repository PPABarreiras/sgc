<!DOCTYPE php>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SGC - Gerenciamento</title>
    <!-- Icons -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- Style Global-->
    <link href="CSS/Tab.css" rel="stylesheet" type="text/css" />
    <!-- Style -->
    <link href="CSS/gerenciamento.css" rel="stylesheet" type="text/css" />
    <!-- Script -->
    <script src="JAVASCRIPT/Tab.js" type="text/JavaScript" defer></script>
    <script src="JAVASCRIPT/gerenciamento.js" type="text/JavaScript" defer></script>
</head>

<body>
    <!-- Menu -->
    <nav class="menu">
        <div class="Seta">
            <i class='bx bxs-send'>
                <div class="Circulo_Seta"></div>
            </i>
        </div>
        <div class="Conteiner_Menu">
            <div class="NameServico">
                <div class="Logo_Status_1">
                    <img src="../img/Logo 1.png" alt="Logo SGC">
                    <h4>Sistema de Gerenciamento </h4>
                    <h4>de Chaves</h4>
                </div>
                <div class="Logo_Status_2">
                    <img src="../img/Chave.png" alt="Logo SGC" class="imgs_menu_2">
                </div>
            </div>
            <ul class="Lista_Menu">
                <!-- Item 1 MENU -->
                <li class="Item_Menu">
                    <a href="home.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-home'></i>
                            <i class='bx bxs-home'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Home">Home</span>
                        </div>
                    </a>
                </li>
                <!-- Item 2 MENU -->
                <li class="Item_Menu active">
                    <a href="gerenciamento.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-key'></i>
                            <i class='bx bxs-key'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Gerenciamento">Gerenciamento</span>
                        </div>
                    </a>
                </li>
                <!-- Item 3 MENU -->
                <li class="Item_Menu">
                    <a href="pendente.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-archive-in'></i>
                            <i class='bx bxs-archive-in'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Pendente">Pendente</span>
                        </div>
                    </a>
                </li>
                <!-- Item 4 MENU -->
                <li class="Item_Menu">
                    <a href="Solicitacoes.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-voice'></i>
                            <i class='bx bxs-user-voice'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Solicitação">Solicitação</span>
                        </div>
                    </a>
                </li>
                <!-- Item 5 MENU -->
                <li class="Item_Menu">
                    <a href="Agendamento.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-hourglass-top'></i>
                            <i class='bx bxs-hourglass-top'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Agendamento">Agendamento</span>
                        </div>
                    </a>
                </li>
                <li class="Item_Menu">
                    <a href="Cadastro-funcionario.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-badge'></i>
                            <i class='bx bxs-user-badge'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Cadastro">Cadastro</span>
                        </div>
                    </a>
                </li>
                <!-- Linha -->
                <div class="Line_Icon_Sobre"></div>
                <!-- Item 6 MENU -->
                <li class="Item_Menu">
                    <a href="Sobre.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-group'></i>
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Sobre">Sobre</span>
                        </div>
                    </a>
                </li>
                <!-- Item 7 MENU -->
                <li class="Item_Menu">
                    <a href="index.php" class="exit_menu">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-export'></i>
                            <i class='bx bx-export'></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="dados_home">
        <div class="Infor_Gerenciamento">
            <a href="home.php">
                <i class='bx bx-chevron-right'></i>
                <h3>Gerenciamento de chaves</h3>
            </a>
        </div>
    </header>
    <main>
        <div class="container_chave">
            
        <div class="PopupAddChave">
            <div class="ConteinarPopupAddChave">
                <img src="../img/Chave.png" alt="Prédio">
                <div class="Lina_Popup_Adicionar"></div>
                <div class="InformacoesPopupAddChaves">
                    <div class="InformoesPopupchaves_1">
                        <h4>Excluir chave<h4>
                                <button name="button-Adicionar-salas" class="button_add_chave"><i
                                        class='bx bx-x'></i></button>
                    </div>
                    <section>
                        <label for="numero">Numero: </label>
                        <input placeholder="Nº" name="numero" class="numero-chave" type="number">
                    </section>
                    <button value="submit" name="button-salvar-predioNovo" class="add-chave">
                        Excluir
                    </button>

                </div>
            </div>
        </div>
        <!--
<div class="div_alt_chave">
            <h4 class="h4_alt_chave">Informe a chave a ser alterada</h4>
            <label>Número:</label>
            <input type="text" name="nmrchave" id="nmrchave"></input>
            <button><img class="botao_red" src="../img/botao_vermelho.svg" alt=""></button>
            <button class="button_cad" type="submit">Alterar</button>
        </div>
        -->
        
        
        <div class="conteiner_lista_opcoes">
            <div class="lista-opcoes">
                <section class="opcoes">
                    <a href="cadastrodechave.php">Adicionar chaves</a>
                    <a href="alterarchave.php">Alterar chaves</a>
                    
                    <a id="excluir-chave" href="#">Excluir chaves</a>
                </section>
            </div>
        </div> 
    
        
    </main>

</body>

</html>