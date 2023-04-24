<?php
include_once 'banco.php';

class Sessao {
    public $id;
    public $matricula;
    public $senha;

    //método construtor
    function __construct($matricula, $senha){
        $this->matricula = $matricula; 
        $this->senha = $senha;
    }

    //Função para validar as credenciais
    function logarAdm() {
        $banco = new Banco();
        $conexao = $banco->conectar();
        try {
            //Prepara uma declaração para validar no banco
            $queryValidar = "select id_administrador, matricula, nome, senha from administrador where matricula = :matricula";

            if ($stmt = $conexao->prepare($queryValidar)) {

                //Vincula a variável na instrução
                $stmt->bindParam(":matricula", $this->matricula, PDO::PARAM_STR);
                //Tenta executar a instrução preparada
                if ($stmt->execute()) {

                    //Verifica se o administrador existe
                    if ($stmt->rowCount() == 1) {
                        if ($linha = $stmt->fetch()) {
                            $id_adm= $linha["id_administrador"];
                            $nome_adm = $linha["nome"];
                            $senha_hash = $linha["senha"];
                            //Verifica a senha
                            if (password_verify($this->senha, $senha_hash)) {
                                
                                //Se a senha estiver correta, uma sessão é iniciada
                                session_start();
                                $_SESSION["logado"] = true;
                                echo "senha validada!";
                                $_SESSION["id"] = $id_adm;
                                $_SESSION["nomeAdm"] = $nome_adm;

                                //Redireciona-o para a página de gerenciamento de chaves
                                header("location: ../Funcionario/Home.php");
                            }
                            else {
                                $_SESSION["nao_autenticado"] = true;
                                header("location: ../Funcionario/index.php");
                            }
                        }
                        else {
                            $_SESSION["nao_autenticado"] = true;
                            header("location: ../Funcionario/index.php");
                        }
                    }
                    else {
                        echo "Algo deu errado. Por favor, tente novamente.";
                    }

                    //fecha a declaração
                    unset($stmt);
                }
            }
            //Encerra a conexão
            unset($conexao);

        } catch (PDOException $ex) {
            echo "Erro ao verificar usuário: " . $ex;
        }
    }
}
?>