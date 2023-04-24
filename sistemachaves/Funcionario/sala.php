<!DOCTYPE php>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC - HOME</title>
    <!-- CSS GLOBAL -->
    <link href='../Funcionario/CSS/GLOBAL/Tab_Bar.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/GLOBAL/ResponseGlobal.css' rel='stylesheet'>
    <!-- CSS -->
    <link href='../Funcionario/CSS/HOME/Home.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/HOME/ResponseHome.css' rel='stylesheet'>
    <link href="CSS/sala.css" rel="stylesheet" type="text/css" />
    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Funcionario/JS/HOME/AjaxHome.js" type="text/javascript" defer></script>
    <script src="../Funcionario/JS/HOME/Home.js" type="text/javascript" defer></script>
    <script src="../Funcionario/JS/GLOBAL/TabBar.js" type="text/javascript" defer></script>
    <!-- CSS ASSETS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Funcionario/CSS/GLOBAL/Fonts&Color.css' rel='stylesheet'>
</head>
<body>
    <header id="cabecalho">
        <section id="titulo-cadastrar">
                <a id="back-predios" href="home.php">
                    <h4>&lt Prédios</h4>
                </a>
                <button id="gerenciar-sala">Gerenciar salas</button>
        </section>
        <div class="container_predios">

            <section class="salas">
                <!-- <div class="mini-container-sala">
                    <img class="img-chave-sala" src="../img/Chave.png" alt="">
                    <div class="linha"></div>
                    <p class="nome_sala">Sala 101</p>
                    <div class="linha"></div>
                    <div class="nome_func_sala">Nome</div>
                    <section>
                        <button><img class="botao_verde" src="../img/botao_verde.svg" alt=""></button>
                        <button><img class="botao_red" src="../img/botao_vermelho.svg" alt=""></button>
                    </section>
                </div> -->

            <?php
            include_once '../config/salaHelper.php';

            $id_predio = filter_input(
                INPUT_GET,
                'id_predio',
                FILTER_SANITIZE_NUMBER_INT
            );
            $salas = getSalasPredio($id_predio);
            foreach($salas as $sa){
                echo    '<div class="mini-container-sala">';
                echo        '<img class="img-chave-sala" src="../img/Chave.png" alt="">';
                echo        '<div class="linha"></div>';
                echo            '<p class="nome_sala">Sala '.$sa->id_sala.'</p>';
                echo            '<div class="linha"></div>';
                echo        '<div class="nome_func_sala">Nome</div>';
                // echo    '<section>';
                // echo        ' <button><img class="botao_verde" src="../img/botao_verde.svg" alt=""></button>';
                // echo        '<button><img class="botao_red" src="../img/botao_vermelho.svg" alt=""></button>';
                // echo    '</section>';
                echo        '</div>';
            }
            ?>
                
           
            </section>

            

        </div>
        
        <div class="PopupAdicionarsala">
            <div class="ConteinarPopupAdicionarsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Adicionar"></div>
                <div class="InformacoesPopupAdicionarsalas">
                    <div class="InformoesPopupsalas_Bloco1">
                        <h4>Gerenciar salas<h4>
                                <button name="button-Adicionar-salas" class="button_Adicionar_sala_Fecha"><i
                                        class='bx bx-x'></i></button>
                    </div>
                    <div class="InformoesPopupsalas_Bloco2">
                        <button class="botoes-sala" id="botao-add">Adicionar sala</button>
                        <button class="botoes-sala" id="botao-clear">Excluir sala</button>
                    </div>

                </div>
            </div>
        </div>
<?php
 $id_predio = filter_input(
    INPUT_GET,
    'id_predio',
    FILTER_SANITIZE_NUMBER_INT
);
?>
        <div class="PopupAddsala">
            <div class="ConteinarPopupAddsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Add"></div>
                <div class="InformacoesPopupAddsalas">
                    <div class="InformoesPopupAddsalas1">
                        <h4>Adicionar sala<h4>
                        <button name="button-Add-salas" class="button_Add_sala_Fecha"><i
                        class='bx bx-x'></i></button>
                    </div>
                    <section>
                        <form name="formSalas" action="../config/salaHelper.php" method="POST">
                        <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrarsala">
                        <input style="display: none" name="id_predio" id="tipo" type="number" value="<?php echo $id_predio?>">
                        <label for="numero">Numero: </label>
                        <input placeholder="Nº" name="numero" class="numero-sala" type="text">
                        <button value="submit" name="button-salvar-predioNovo" class="salvar-sala" id="salvar-sala">Salvar</button>
                    </form>
                    </section>
                </div>
            </div>
        </div>

        <div class="PopupExcluirsala">
            <div class="ConteinarPopupExcluirsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Excluir"></div>
                <div class="InformacoesPopupExcluirsalas">
                    <div class="InformoesPopupExcluirsalas1">
                        <h4>Excluir sala<h4>
                                <button name="button-Excluir-salas" class="button_Excluir_sala_Fecha"><i class='bx bx-x'></i></button>
                    </div>
                    <section>
                        <form action="">
                        <label for="numero">Numero: </label>
                        <input placeholder="Nº" name="numero" class="numero-sala" type="number">

                        <input value="submit" name="button-salvar-predioNovo" class="excluir-sala">
                        Salvar
                    </input>
                        </form>
                    </section>
                    
                </div>

            </div>
        </div>
        </div>

    </header>
    
    <main>
        <div class="Tabela_Chaves">
            <div class="Chaves_Predio2">
                <h4>Chave</h4>
            </div>
            <!-- Container Nomeclatura Predio -->
            <div class="Container_Predios1_Chave">
                <!-- Descrição Prédio -->
                <div class="informacao_predio">
                    <div class="informacao_predio_linha1"></div>
                    <div class="nome_predio_tabela2">
                        <h4>Prédio 1</h4>
                    </div>
                    <div class="informacao_predio_linha2"></div>
                </div>

            </div>
        </div>
        </div>
    </main>

    
</body>

</html>