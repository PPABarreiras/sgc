<!DOCTYPE php>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC</title>
    <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SGC</title>
  <!-- Icons -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
  <!-- Style Global-->
  <link href="CSS/Tab.css" rel="stylesheet" type="text/css" />
  <!-- Style -->
  <link href="CSS/alterarchave.css" rel="stylesheet" type="text/css" />
  <!-- Script -->
  <script src="JAVASCRIPT/Tab.js" type="text/JavaScript" defer ></script>
</head>
<body>
    <!-- Menu -->
  <nav>
    <div class="Seta">
        <i class='bx bxs-send'><div class="Circulo_Seta"></div></i>
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
            <li class="Item_Menu active">
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
            <li class="Item_Menu">
                <a href="gerenciamento.php">
                    <div class="Item_Menu_Icon">
                        <i class='bx bxs-key' ></i>
                        <i class='bx bxs-key' ></i>
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
                <a href="#">
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
                <a href="../config/logout.php" class="exit_menu">
                    <div class="Item_Menu_Icon">
                        <i class='bx bx-export'></i>
                        <i class='bx bx-export'></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
  <header>
    <div class="Infor_Gerenciamento_Cadastro">
      <div class="Infor_Gerenciamento">
        <a href="gerenciamento.php">
          <i class='bx bx-chevron-right'></i>
          <h3>Gerenciamento de chaves</h3>
        </a>
      </div>
      <div class="Infor_Gerenciamento_Cadastro">
        <a>
          <i class='bx bx-chevron-right'></i>
          <h3>Alterar chave</h3>
        </a>
      </div>
    </div>
  </header>
  <main>
    <div class="container_cadastro">
      <form class="form_cadastro">
        <div class = "nmr_chave">
            <h4>Número da chave</h4>
            <input type="text" placeholder="Informe o número da chave" name="nome" id="nome"></input>
        </div>
        <div class = "nmr_predio">
            <h4>Prédio</h4>
            <input type="text" placeholder="Informe o número do prédio" name="predio" id="predio"></input>
        </div>
        <div class = "desc">
            <h4>Descrição</h4>
            <input type="text" placeholder="Informe a descrição da chave" name="desc" id="desc"></input>
        </div>
        <div class="bnt_input">
          <button class = "button_cad" type="submit">Alterar</button>
        </div>
        </form>
    </div
  </main>
</body>
</html>