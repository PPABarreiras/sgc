<?php
//Inicializa a sessão
session_start();

//Zera as variáveis das sessões
$_SESSION = array();

//Encerra a sessão
session_destroy();

//Redireciona para a página inicial
header("location: ../Funcionario/index.php");
exit;
?>