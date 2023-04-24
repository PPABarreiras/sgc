<?php

class Banco
{
    private $conn;

    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbname = "SGC";

    function conectar()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbname", $this->userName, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $ex) {
            echo "Conection failed: " . $ex->getMessage();
        }
    }

    function fecharConexao(){
        try{
            $this->conn = null;
            echo "conexão finalizada";
        } catch (PDOException $ex){
            echo "Erro ao conectar com o Banco";
        }
    }
}
