<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar Funcionário</title>
    
    <link rel="stylesheet" href="./CSS/cadastro_funcionario.css" />
    <link rel="stylesheet" href="./CSS/GLOBAL/Fonts&Color.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/c2363c17c5.js" crossorigin="anonymous"></script>
    <script src="./JS/dados_login.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <main>
        <header>
            <img src="./../img/logo.svg" alt="Logo do sistema" class="logo-top" />
        </header>
        <section class="login">

            <form action="../config/funcionarioHelper.php" name="formCadFuncionario" method="POST"
                class="formulario" target="_self" onsubmit="return cadastrar()">
                <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrarFuncionario">
                <h1 class="titulo-login">Cadastre sua conta</h1>

                <?php
                    if (isset($_SESSION['sucesso_cadastro'])):
                ?>
                <p class="cadastro-efetuado">Cadastro Efetuado!</p>
                <?php
                endif;
                unset($_SESSION['sucesso_cadastro']);
                ?>
                <?php
                    if (isset($_SESSION['usuario_ja_cadastrado'])):
                ?>
                <p class="erro-cadastro">A matrícula informada já existe. Informe outra e tente novamente.</p>
                <?php
                endif;
                unset($_SESSION['usuario_ja_cadastrado']);
                ?>
                <div class="caixa-entrada">
                    <input type="text" name="nome" placeholder="Nome completo" class="input" required>
                    <i class="fa fa-user fa-lg fa-fw"></i>
                </div>

                <div class="caixa-entrada">
                    <select name="tipo_func" id="Selecionar-servidor" required>
                        <option value="" disabled selected hidden>Tipo de Funcionário</option>
                        <option value="terceirizado">Terceirizado</option>
                        <option value="servidor">Servidor</option>
                        <option value="professor">Professor</option>
                        <option value="administrador">Administrador</option>
                    </select>
                    <i class="fa fa-address-card fa-lg fa-fw"></i>
                </div>
                <div class="caixa-entrada">
                    <input type="email" name="email" placeholder="Email" class="input" required>
                    <i class="fa-solid fa-envelope fa-lg fa-fw"></i>
                </div>

                <div class="caixa-entrada">
                    <input type="number" name="matricula" placeholder="Matrícula" class="input" maxlength="15" required>
                    <i class="fa fa-id-card-clip fa-lg fa-fw"></i>
                </div>

                <div class="caixa-entrada">
                    <input type="password" name="senha" placeholder="Senha" class="input" id="senha" required>
                    <i class="fa fa-lock fa-lg fa-fw"></i>
                </div>
                <div class="caixa-entrada">
                    <input type="password" name="senhaFinal" placeholder="Confirmar Senha" class="input"
                        id="confirmar_senha" oninput="validarSenha('senha', 'confirmar_senha')" required>
                    <i class="fa fa-lock fa-lg fa-fw"></i>
                </div>
                <div class="caixa-entrada">
                    <input type="submit" value="Cadastrar" class="botao-entrar" disabled>
                </div>

                <div class="caixa-link">
                    <a href="./index.php" class="link-cadastrar">Já tem uma conta?</a>
                </div>
            </form>
        </section>
        <section class="imagem-lateral">
            <img src="./../img/chave 1.svg" alt="ilustração de uma chave">
            <h3>Sistema de Gerenciamento de <br>Chaves</h3>
        </section>
    </main>
</body>

</html>