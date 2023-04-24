<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fazer login</title>

    <link rel="stylesheet" href="./CSS/login.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <script src="./JS/verificarLogin.js" defer></script>
  </head>
  <body>
    <main>      
      <header>
        <img src="./../img/logo.svg" alt="Logo do sistema" class="logo-top"/>
      </header>
      <section class="login">
        
        <form action="../config/loginHelper.php" method="POST" class="formulario">
        <input style="display: none" name="tipo" id="tipo" type="text" value="logarAdm">

          <h1 class="titulo-login">Conecte em sua conta</h1>
          <?php
          if (isset($_SESSION['nao_autenticado'])):
          ?>
          <p class="erro-autenticacao">Erro: matrícula ou senha inválidas.</p>
          <?php
          endif;
          unset($_SESSION['nao_autenticado']);
          ?>
            <div class="caixa-entrada">
                <input type="number" name="matricula" placeholder="Matrícula" class="input" maxlength="15" required>
                <i class="fa fa-user fa-lg fa-fw"></i>
            </div>

            <div class="caixa-entrada">
                <input type="password" name="senha" placeholder="Senha" class="input" required>
                <i class="fa fa-lock fa-lg fa-fw"></i>
            </div>
            <div class="caixa-entrada">
            <input type="submit" value="Entrar" class="botao-entrar" disabled>
          </div>

          <div class="caixa-link">
            <a href="Cadastro-funcionario.php" class="link-cadastrar">Cadastrar Funcionário</a>
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