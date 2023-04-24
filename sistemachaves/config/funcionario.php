<?php

include_once 'banco.php';
include_once '../config/libs/envio.php';
class Usuario {
    public $id;
    public $nome;
    public $tipo_func;
    public $matricula;
    public $senha;
    public $email;

    function __construct($nome, $tipo_func, $matricula, $senha, $email){
        $this->nome = $nome;
        $this->tipo_func = $tipo_func; 
        $this->matricula = $matricula; 
        $this->senha = $senha;
        $this->email = $email;
    }
    function inserirCliente()
    {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            /**Verifica se o usuário já existe */
            $queryVerifica = "select id_cliente from cliente where matricula = :matricula";
            if ($stmt = $conexao->prepare($queryVerifica)) {
                $stmt->bindParam(':matricula', $this->matricula, PDO::PARAM_STR);
                if ($stmt->execute()) {
                    /**valida a existencia de linhas na consulta */
                    if ($stmt->rowCount() == 1) {
                        $_SESSION['usuario_ja_cadastrado'] = true;
                    }
                    else {
                        /**Caso não existir o usuário, o cadastro é realizado */
                        $stmt = $conexao->prepare("insert into cliente (nome, matricula, senha, tipo_func, email) values (:nome, :matricula, :senha, :tipo_func, :email)");
                        $senha_hash = password_hash($this->senha, PASSWORD_DEFAULT);
                        $stmt->bindParam(':nome', $this->nome);
                        $stmt->bindParam(':matricula', $this->matricula);
                        $stmt->bindParam(':senha', $senha_hash);
                        $stmt->bindParam(':tipo_func', $this->tipo_func);
                        $stmt->bindParam(':email', $this->email);
                        $stmt->execute();
                        $_SESSION['sucesso_cadastro'] = true;
                        enviarEmail($this->nome, $this->email);
                        }
                    }
                }
        }
        catch (PDOException $ex) {
            echo "Erro ao inserir Cliente: " . $ex;
        }
    }

    function inserirAdministrador()
    {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            /**Verifica se o usuário já existe */
            $queryVerifica = "select id_administrador from administrador where matricula = :matricula";
            if ($stmt = $conexao->prepare($queryVerifica)) {
                $stmt->bindParam(':matricula', $this->matricula, PDO::PARAM_STR);
                if ($stmt->execute()) {
                    /**valida a existencia de linhas na consulta */
                    if ($stmt->rowCount() == 1) {
                        $_SESSION['usuario_ja_cadastrado'] = true;
                    }   
                    else {
                        /**Caso não existir o usuário, o cadastro é realizado */
                        $stmt = $conexao->prepare("insert into administrador (nome, matricula, senha, tipo_func, email) values (:nome, :matricula, :senha, :tipo_func, :email)");
                        $senha_hash = password_hash($this->senha, PASSWORD_DEFAULT);
                        $stmt->bindParam(':nome', $this->nome);
                        $stmt->bindParam(':matricula', $this->matricula);
                        $stmt->bindParam(':senha', $senha_hash);
                        $stmt->bindParam(':tipo_func', $this->tipo_func);
                        $stmt->bindParam(':email', $this->email);
                        $stmt->execute();
                        $_SESSION['sucesso_cadastro'] = true;
                        enviarEmail($this->nome, $this->email);
                        }
                    }
                }
            }
            catch (PDOException $ex) {
            echo "Erro ao inserir Administrador: " . $ex;
        }
    }
}
?>